<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HiringPage;
use App\Models\Hiring;
use App\Models\HiringRequest;
use Illuminate\Support\Facades\Storage;

class AdminHiringController extends Controller
{
    public function index(){
        $data['hiring'] = HiringPage::first();
        return view('admin.hiring.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_title'=>'required|string',
            'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $hiring = HiringPage::findOrFail(1);
        // bg_image upload
        $bg_image = $hiring->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('hiring');
        }

        $hiring->update([
            'bg_image'=>$bg_image,
            'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Hiring Updated Successfully');

        return back();
    }

    public function show(){
        $data['hirings'] = Hiring::all();
        return view('admin.hiring.show',$data);
    }

    public function create(){
        return view('admin.hiring.create');
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'img_title'=>'required|string|max:255',
            'img_desc'=>'required|string',
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'location'=>'required|string',
            'type'=>'required|string',
        ]);
        $path = Storage::putFile("hiring",$request->file('img'));

        Hiring::create([
            'img'=>$path,
            'img_title'=>$request->img_title,
             'img_desc'=>$request->img_desc,
            'title'=>$request->title,
            'description'=>$request->description,
            'location'=>$request->location,
            'type'=>$request->type,
        ]);
        $request->session()->flash('success','Hiring Added Successfully');
        return back();
    }

    public function edit($id){
        $data['hiring'] = Hiring::findOrFail($id);
        return view('admin.hiring.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'img'=>'image|max:2048',
            'img_title'=>'required|string|max:255',
            'img_desc'=>'required|string',
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'location'=>'required|string',
            'type'=>'required|string',
        ]);
        $hiring = Hiring::findOrFail($id);
        // img upload
        $img = $hiring->img;
        if($request->hasFile('img')){
            if(Storage::exists($img)){
                Storage::delete($img);
            }
            $img = $request->file('img')->store('hiring');
        }

        $hiring->update([
            'img'=>$img,
            'img_title'=>$request->img_title,
             'img_desc'=>$request->img_desc,
            'title'=>$request->title,
            'description'=>$request->description,
            'location'=>$request->location,
            'type'=>$request->type,
        ]);
        $request->session()->flash('success','Hiring Updated Successfully');
        return back();
    }

    public function delete($id){
        $hiring = Hiring::findOrFail($id);
        $img = $hiring->img;
        if(Storage::exists($img)){
            Storage::delete($img);
        }
        $hiring->delete();
        return back();
    }

    public function request($id){
        $data['hirings'] = HiringRequest::all();
        $data['id'] = $id;
        return view('admin.hiring.request',$data);
    }
}
