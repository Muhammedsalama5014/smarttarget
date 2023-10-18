<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use Illuminate\Support\Facades\Storage;

class AdminAboutPageController extends Controller
{   
    public function index(){
        $data['about'] = AboutPage::first();
        return view('admin.about.index',$data);
    }

    public function update(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_title'=>'required|string',
            'bg_image_desc'=>'required|string',
            'h_title'=>'required|string',
            'h_desc'=>'required|string',
            'guide_title'=>'required|string',
            'guide_desc1'=>'required|string',
            'guide_desc2'=>'required|string',
            'guide_image'=>'image',
            'guide_image_title'=>'required|string',
            'guide_image_desc'=>'required|string',
            'profile'=>'mimetypes:application/pdf|max:5000',
            'about_title'=>'required|string',
            'about_desc1'=>'required|string',
            'about_desc2'=>'required|string',
            'mission'=>'required|string',
            'vision'=>'required|string',
            'about_image1'=>'image',
            'about_image2'=>'image',
            'about_image1_title'=>'required|string',
            'about_image1_desc'=>'required|string',
            'about_image2_title'=>'required|string',
            'about_image2_desc'=>'required|string',
        ]);
        $about = AboutPage::findOrFail(1);
        // bg_image upload
        $bg_image = $about->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('about');
        }


        // Image guide_image upload
        $guide_image = $about->guide_image;
        if($request->hasFile('guide_image')){
            if($guide_image){
                Storage::delete($guide_image);
            }
            $guide_image = $request->file('guide_image')->store('about'); 
        }

        // Image about_image1 upload
        $about_image1 = $about->about_image1;
        if($request->hasFile('about_image1')){
            if($about_image1){
                Storage::delete($about_image1);
            }
            $about_image1 = $request->file('about_image1')->store('about'); 
        }

        // Image about_image2 upload
        $about_image2 = $about->about_image2;
        if($request->hasFile('about_image2')){
            if($about_image2){
                Storage::delete($about_image2);
            }
            $about_image2 = $request->file('about_image2')->store('about'); 
        }

        $profile = $about->profile;
        if($request->hasFile('profile')){
            if($profile){
                Storage::delete($profile);
            }
            $profile = $request->file('profile')->store('about'); 
        }

        $about->update([
            'bg_image'=>$bg_image,
            'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'h_title'=>$request->h_title,
            'h_desc'=>$request->h_desc,
            'guide_title'=>$request->guide_title,
            'guide_desc1'=>$request->guide_desc1,
            'guide_desc2'=>$request->guide_desc2,
            'guide_image'=>$guide_image,
            'guide_image_title'=>$request->guide_image_title,
            'guide_image_desc'=>$request->guide_image_desc,
            'profile'=>$profile,
            'about_title'=>$request->about_title,
            'about_desc1'=>$request->about_desc1,
            'about_desc2'=>$request->about_desc2,
            'vision'=>$request->vision,
            'mission'=>$request->mission,
            'about_image1'=>$about_image1,
            'about_image2'=>$about_image2,
            'about_image1_title'=>$request->about_image1_title,
            'about_image1_desc'=>$request->about_image1_desc,
            'about_image2_title'=>$request->about_image2_title,
            'about_image2_desc'=>$request->about_image2_desc,
        ]);
        $request->session()->flash('success','About Updated Successfully');

        return back();
    }
    
}
