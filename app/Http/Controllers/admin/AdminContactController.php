<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactPage;
use App\Models\ContactMessages;
use Illuminate\Support\Facades\Storage;

class AdminContactController extends Controller
{
   public function index(){
        $data['contact'] = ContactPage::first();
        return view('admin.contact.index',$data);
    }

    public function update(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_title'=>'required|string|max:255',
            'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = ContactPage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('contact');
        }

        $service->update([
            'bg_image'=>$bg_image,
            'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Contact Updated Successfully');

        return back();
    }

    public function messages(){
        $data['messages'] = ContactMessages::all();
        return view('admin.contact.messages',$data);
    }
}
