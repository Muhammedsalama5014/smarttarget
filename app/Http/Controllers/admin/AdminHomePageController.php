<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\BrandGoals;
use Illuminate\Support\Facades\Storage;

class AdminHomePageController extends Controller
{
    public function index(){
        $data['home'] = HomePage::findOrFail(1);
        $data['goals'] = BrandGoals::all();
        return view('admin.home.index', $data);
    }

    public function update(Request $request){
        $request->validate([
            'header_video'=>'mimetypes:video/mp4,video/mpeg,video/quicktime|max:50000',
            'who_title'=>'required|string',
            'who_description1'=>'required|string',
            'who_description2'=>'required|string',
            'who_img1'=>'image',
            'who_img2'=>'image',
            'who_img3'=>'image',
            'who_img4'=>'image',
            'who_img1_title'=>'required|string',
            'who_img1_desc'=>'required|string',
            'who_img2_title'=>'required|string',
            'who_img2_desc'=>'required|string',
            'who_img3_title'=>'required|string',
            'who_img3_desc'=>'required|string',
            'about_title'=>'required|string',
            'about_description1'=>'required|string',
            'about_description2'=>'required|string',
            'vission'=>'required|string',
            'mission'=>'required|string',
            'mission_img'=>'image',
            'vission_img'=>'image',
            'mission_img_title'=>'required|string',
            'mission_img_desc'=>'required|string',
            'vission_img_title'=>'required|string',
            'vission_img_desc'=>'required|string',
        ]);
        $home = HomePage::findOrFail(1);
        // Video upload
        $path = $home->header_video;
        if($request->hasFile('header_video')){
            if(Storage::exists($path)){
                Storage::delete($path);
            }
            $path = $request->file('header_video')->store('home');
        }


        // Image who_img1 upload
        $who_img1 = $home->who_img1;
        if($request->hasFile('who_img1')){
            if($who_img1){
                Storage::delete($who_img1);
            }
            $who_img1 = $request->file('who_img1')->store('home'); 
        }

        // Image who_img2 upload
        $who_img2 = $home->who_img2;
        if($request->hasFile('who_img2')){
            if($who_img2){
                Storage::delete($who_img2);
            }
            $who_img2 = $request->file('who_img2')->store('home'); 
        }

        // Image who_img3 upload
        $who_img3 = $home->who_img3;
        if($request->hasFile('who_img3')){
            if($who_img3){
                Storage::delete($who_img3);
            }
            $who_img3 = $request->file('who_img3')->store('home'); 
        }

        // Image mission_img upload
        $mission_img = $home->mission_img;
        if($request->hasFile('mission_img')){
            if($mission_img){
                Storage::delete($mission_img);
            }
            $mission_img = $request->file('mission_img')->store('home'); 
        }


        // Image vission_img upload
        $vission_img = $home->vission_img;
        if($request->hasFile('vission_img')){
            if($vission_img){
                Storage::delete($vission_img);
            }
            $vission_img = $request->file('vission_img')->store('home'); 
        }


        $home->update([
            'header_video'=>$path,
            'who_title'=>$request->who_title,
            'who_description1'=>$request->who_description1,
            'who_description2'=>$request->who_description2,
            'who_img1'=>$who_img1,
            'who_img2'=>$who_img2,
            'who_img3'=>$who_img3,
            'who_img1_title'=>$request->who_img1_title,
            'who_img1_desc'=>$request->who_img1_desc,
            'who_img2_title'=>$request->who_img1_title,
            'who_img2_desc'=>$request->who_img1_desc,
            'who_img3_title'=>$request->who_img1_title,
            'who_img3_desc'=>$request->who_img1_desc,
            'who_img4'=>'1.png',
            'about_title'=>$request->about_title,
            'about_description1'=>$request->about_description1,
            'about_description2'=>$request->about_description2,
            'vission'=>$request->vission,
            'mission'=>$request->mission,
            'mission_img'=>$mission_img,
            'vission_img'=>$vission_img,
            'mission_img_title'=>$request->mission_img_title,
            'mission_img_desc'=>$request->mission_img_desc,
             'vission_img_title'=>$request->vission_img_title,
            'vission_img_desc'=>$request->vission_img_desc,
        ]);
        $request->session()->flash('success','Home Updated Successfully');

        return back();
    }
}
