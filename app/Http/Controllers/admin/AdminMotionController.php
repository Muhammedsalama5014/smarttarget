<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MotionPage;
use App\Models\Motion;
use Illuminate\Support\Facades\Storage;

class AdminMotionController extends Controller
{
    public function index(){
        $data['motion'] = MotionPage::first();
        return view('admin.motion.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
             'bg_image_title'=>'required|string',
             'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = MotionPage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('motion');
        }

        $service->update([
            'bg_image'=>$bg_image,
             'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Motion Updated Successfully');

        return back();
    }

    public function show(){
        $data['motions'] = Motion::all();
        return view('admin.motion.show',$data);
    }

    public function create(){
        return view('admin.motion.create');
    }

    public function store(Request $request){
        $request->validate([
            'video'=>'required|mimetypes:video/mp4,video/mpeg,video/quicktime|max:50000',
            'title'=>'required|string|max:255',
            'company'=>'required|string',
            'description'=>'required|string',
            'video1'=>'required',
            'video2'=>'required',
            'video3'=>'required',
            'video4'=>'required',
            'video5'=>'required',
        ]);
        $video= Storage::putFile("motion",$request->file('video'));
        $video1= Storage::putFile("motion",$request->file('video1'));
        $video2= Storage::putFile("motion",$request->file('video2'));
        $video3= Storage::putFile("motion",$request->file('video3'));
        $video4= Storage::putFile("motion",$request->file('video4'));
        $video5= Storage::putFile("motion",$request->file('video5'));
        
        Motion::create([
            'video'=>$video,
            'video1'=>$video1,
            'video2'=>$video2,
            'video3'=>$video3,
            'video4'=>$video4,
            'video5'=>$video5,
            'title'=>$request->title,
            'company'=>$request->company,
            'description'=>$request->description,
        ]);
        
        $request->session()->flash('success','Motion Added Successfully');
        return back();
    }

    public function edit($id){
        $data['motion'] = Motion::findOrFail($id);
        return view('admin.motion.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'video'=>'mimetypes:video/mp4,video/mpeg,video/quicktime|max:50000',
            'title'=>'required|string|max:255',
            'company'=>'required|string',
            'description'=>'required|string',
            'video1'=>'mimetypes:video/mp4,video/mpeg,video/quicktime|max:50000',
            'video2'=>'mimetypes:video/mp4,video/mpeg,video/quicktime|max:50000',
            'video3'=>'image',
            'video4'=>'image',
            'video5'=>'image',
        ]);
        $motion = Motion::findOrFail($id);

        $video = $motion->video;
        if($request->hasFile('video')){
            if(Storage::exists($video)){
                Storage::delete($video);
            }
            $video = $request->file('video')->store('motion');
        }

        $video1 = $motion->video1;
        if($request->hasFile('video1')){
            if(Storage::exists($video1)){
                Storage::delete($video1);
            }
            $video1 = $request->file('video1')->store('motion');
        }

        $video2 = $motion->video2;
        if($request->hasFile('video2')){
            if(Storage::exists($video2)){
                Storage::delete($video2);
            }
            $video2 = $request->file('video2')->store('motion');
        }

        $video3 = $motion->video3;
        if($request->hasFile('video3')){
            if(Storage::exists($video3)){
                Storage::delete($video3);
            }
            $video3 = $request->file('video3')->store('motion');
        }

        $video4 = $motion->video4;
        if($request->hasFile('video4')){
            if(Storage::exists($video4)){
                Storage::delete($video4);
            }
            $video4 = $request->file('video4')->store('motion');
        }

        $video5 = $motion->video5;
        if($request->hasFile('video5')){
            if(Storage::exists($video5)){
                Storage::delete($video5);
            }
            $video5 = $request->file('video5')->store('motion');
        }

        $motion->update([
            'video'=>$video,
            'video1'=>$video1,
            'video2'=>$video2,
            'video3'=>$video3,
            'video4'=>$video4,
            'video5'=>$video5,
            'title'=>$request->title,
            'company'=>$request->company,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Motion Updated Successfully');
        return back();
    }

    public function delete($id){
        $motion = Motion::findOrFail($id);
        $motion->delete();
        return back();
    }
}
