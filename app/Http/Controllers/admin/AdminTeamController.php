<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class AdminTeamController extends Controller
{
    public function show(){
        $data['teams'] = Team::all();
        return view('admin.team.index',$data);
    }

    public function create(){
        return view('admin.team.create');
    }

    public function store(Request $request){
        $request->validate([
            'img'=>'required|image|max:2048',
            'img_title'=>'required|string|max:255',
            'img_desc'=>'required|string',
            'name'=>'required|string',
            'position'=>'required|string',
            'description'=>'required|string',
            'video'=>'required',
            'about'=>'required|string',
            'education'=>'required|string',
            'experiance'=>'required|string',
        ]);
        $path = Storage::putFile("team",$request->file('img'));
        $video = Storage::putFile("team",$request->file('video'));

        Team::create([
            'img'=>$path,
            'img_title'=>$request->img_title,
            'img_desc'=>$request->img_desc,
            'name'=>$request->name,
            'position'=>$request->position,
            'description'=>$request->description,
            'video'=>$video,
            'about'=>$request->about,
            'education'=>$request->education,
            'experiance'=>$request->experiance,
        ]);
        $request->session()->flash('success','Team Added Successfully');
        return back();
    }

    public function edit($id){
        $data['team'] = Team::find($id);
        return view('admin.team.edit',$data);
    }

    public function update(Request $request,$id){
        $request->validate([
            'img'=>'image|max:2048',
            'img_title'=>'required|string|max:255',
            'img_desc'=>'required|string',
            'name'=>'required|string',
            'position'=>'required|string',
            'description'=>'required|string',
            'video'=>'mimetypes:video/mp4,video/mpeg,video/quicktime|max:50000',
            'about'=>'required|string',
            'education'=>'required|string',
            'experiance'=>'required|string',
        ]);
        
        $hiring = Team::findOrFail($id);
        // img upload
        $img = $hiring->img;
        if($request->hasFile('img')){
            if(Storage::exists($img)){
                Storage::delete($img);
            }
            $img = $request->file('img')->store('team');
        }

        $video = Team::findOrFail($id);
        // img upload
        $img2 = $hiring->video;
        if($request->hasFile('video')){
            if(Storage::exists($img2)){
                Storage::delete($img2);
            }
            $img2 = $request->file('video')->store('team');
        }

        Team::find($id)->update([
            'img'=>$img,
            'img_title'=>$request->img_title,
            'img_desc'=>$request->img_desc,
            'name'=>$request->name,
            'position'=>$request->position,
            'description'=>$request->description,
            'video'=>$img2,
            'about'=>$request->about,
            'education'=>$request->education,
            'experiance'=>$request->experiance,
        ]);

        $request->session()->flash('success','Team Added Successfully');
        return back();
    }

    public function delete($id){
        Team::find($id)->delete();
        return back();
    }
}
