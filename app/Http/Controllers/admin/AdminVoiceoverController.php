<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voice;
use App\Models\VoicePage;
use Illuminate\Support\Facades\Storage;

class AdminVoiceoverController extends Controller
{
    public function index(){
        $data['voice'] = VoicePage::first();
        return view('admin.voice.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_title'=>'required|string',
             'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = VoicePage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('voice');
        }

        $service->update([
            'bg_image'=>$bg_image,
               'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','VoiceOver Updated Successfully');

        return back();
    }

    public function show(){
        $data['voices'] = Voice::all();
        return view('admin.voice.show',$data);
    }

    public function create(){
        return view('admin.voice.create');
    }

    public function store(Request $request){
        $request->validate([
            'audio'=>'required',
            'title'=>'required|string|max:255',
            'type'=>'required|string',
        ]);
        $audio = Storage::putFile("voices",$request->file('audio'));

        Voice::create([
            'audio'=>$audio,
            'title'=>$request->title,
            'type'=>$request->type,
        ]);
        $request->session()->flash('success','Voiceover Added Successfully');
        return back();
    }

    public function edit($id){
        $data['voice'] = Voice::findOrFail($id);
        return view('admin.voice.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=>'required|string|max:255',
            'type'=>'required|string',
        ]);

        $voice = Voice::findOrFail($id);

        // audio upload
        $audio = $voice->audio;
        if($request->hasFile('audio')){
            if(Storage::exists($audio)){
                Storage::delete($audio);
            }
            $audio = $request->file('audio')->store('voice');
        }

        $voice->update([
            'audio'=>$audio,
            'title'=>$request->title,
            'type'=>$request->type,
        ]);
        $request->session()->flash('success','Voiceover Updated Successfully');
        return back();
    }


    public function delete($id){
        $voice = Voice::findOrFail($id);
        $voice->delete();
        return back();
    }
}
