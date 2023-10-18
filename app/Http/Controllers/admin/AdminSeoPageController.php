<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoPage;
use Illuminate\Support\Facades\Storage;

class AdminSeoPageController extends Controller
{
    public function index(){
        $data['seo'] = SeoPage::first();
        return view('admin.seo.index',$data);
    }

    public function update(Request $request){
        $request->validate([
            'bg_image'=>'image',
             'bg_image_title'=>'required|string',
             'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = SeoPage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('seo');
        }

        $service->update([
            'bg_image'=>$bg_image,
              'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Seo Updated Successfully');

        return back();
    }
}
