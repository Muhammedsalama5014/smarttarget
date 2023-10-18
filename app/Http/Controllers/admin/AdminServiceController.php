<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicePage;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class AdminServiceController extends Controller
{
    public function index(){
        $data['service'] = ServicePage::first();
        return view('admin.service.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_desc'=>'required|string',
            'bg_image_title'=>'required|string',
            'title'=>'required|string',
            'subtitle'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = ServicePage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('service');
        }

        $service->update([
            'bg_image'=>$bg_image,
            'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Service Updated Successfully');

        return back();
    }

    public function show(){
        $data['services'] = Service::all();
        return view('admin.service.show',$data);
    }

    public function create(){
        return view('admin.service.create');
    }

    public function store(Request $request){
        $request->validate([
            'icon'=>'required|image|max:2048',
            'title'=>'required|string|max:255',
            'sub_title'=>'required|string',
            's_description'=>'required|string',
            'main_img'=>'required|image',
            'main_img_title'=>'required|string',
            'main_img_desc'=>'required|string',
            'l_description'=>'required|string',
            'end_img1'=>'required|image',
            'end_img2'=>'required|image',
            'end_img3'=>'required|image',
            'end_img4'=>'required|image',
            'end_img1_title'=>'required|string',
            'end_img1_desc'=>'required|string',
            'end_img2_title'=>'required|string',
            'end_img2_desc'=>'required|string',
            'end_img3_title'=>'required|string',
            'end_img3_desc'=>'required|string',
            'end_img4_title'=>'required|string',
            'end_img4_desc'=>'required|string',
             'service_title_url'=>'required|string',
        ]);
        $path = Storage::putFile("service",$request->file('icon'));
        $mainimg = Storage::putFile("service",$request->file('main_img'));
        $endimg1 = Storage::putFile("service",$request->file('end_img1'));
        $endimg2 = Storage::putFile("service",$request->file('end_img2'));
        $endimg3 = Storage::putFile("service",$request->file('end_img3'));
        $endimg4 = Storage::putFile("service",$request->file('end_img4'));

        Service::create([
            'icon'=>$path,
            'title'=>$request->title,
            'sub_title'=>$request->title,
            's_description'=>$request->title,
            'main_img'=>$mainimg,
            'main_img_title'=>$request->main_img_title,
            'main_img_desc'=>$request->main_img_desc,
            'l_description'=>$request->title,
            'end_img1'=>$endimg1,
            'end_img2'=>$endimg2,
            'end_img3'=>$endimg3,
            'end_img4'=>$endimg4,
            'end_img1_title'=>$request->end_img1_title,
            'end_img1_desc'=>$request->end_img1_desc,
            'end_img2_title'=>$request->end_img2_title,
            'end_img2_desc'=>$request->end_img2_desc,
            'end_img3_title'=>$request->end_img3_title,
            'end_img3_desc'=>$request->end_img3_desc,
            'end_img4_title'=>$request->end_img4_title,
            'end_img4_desc'=>$request->end_img4_desc,
            'service_title_url'=>$request->service_title_url,
        ]);
        $request->session()->flash('success','BServicelog Added Successfully');
        return back();
    }

    public function edit($id){
        $data['service'] = Service::findOrFail($id);
        return view('admin.service.edit',$data);
    }

     public function update(Request $request){
        $request->validate([
            'id'=> 'exists:services,id',
            'icon'=>'image|max:2048',
            'title'=>'required|string|max:255',
            'sub_title'=>'required|string',
            's_description'=>'required|string',
            'main_img'=>'image',
             'main_img_title'=>'required|string',
            'main_img_desc'=>'required|string',
            'l_description'=>'required|string',
            'end_img1'=>'image',
            'end_img2'=>'image',
            'end_img3'=>'image',
            'end_img4'=>'image',
               'end_img1_title'=>'required|string',
            'end_img1_desc'=>'required|string',
            'end_img2_title'=>'required|string',
            'end_img2_desc'=>'required|string',
            'end_img3_title'=>'required|string',
            'end_img3_desc'=>'required|string',
            'end_img4_title'=>'required|string',
            'end_img4_desc'=>'required|string',
        ]);
        $service = Service::findOrFail($request->id);
        // icon upload
        $path = $service->icon;
        if($request->hasFile('icon')){
            Storage::delete($path);
            $path = Storage::putFile("service",$request->file('icon'));
        }
        // main_img upload
        $mainimg = $service->main_img;
        if($request->hasFile('main_img')){
            Storage::delete($mainimg);
            $mainimg = Storage::putFile("service",$request->file('main_img'));
        }
        // end_img1 upload
        $endimg1 = $service->end_img1;
        if($request->hasFile('end_img1')){
            Storage::delete($endimg1);
            $endimg1 = Storage::putFile("service",$request->file('end_img1'));
        }
        // end_img2 upload
        $endimg2 = $service->end_img2;
        if($request->hasFile('end_img2')){
            Storage::delete($endimg2);
            $endimg2 = Storage::putFile("service",$request->file('end_img2'));
        }
        // end_img3 upload  
        $endimg3 = $service->end_img3;
        if($request->hasFile('end_img3')){
            Storage::delete($endimg3);
            $endimg3 = Storage::putFile("service",$request->file('end_img3'));
        }
        // end_img4 upload
        $endimg4 = $service->end_img4;
        if($request->hasFile('end_img4')){
            Storage::delete($endimg4);
            $endimg4 = Storage::putFile("service",$request->file('end_img4'));
        }
        $service->update([
            'icon'=>$path,
            'title'=>$request->title,
            'sub_title'=>$request->title,
            's_description'=>$request->title,
            'main_img'=>$mainimg,
               'main_img_title'=>$request->main_img_title,
            'main_img_desc'=>$request->main_img_desc,
            'l_description'=>$request->title,
            'end_img1'=>$endimg1,
            'end_img2'=>$endimg2,
            'end_img3'=>$endimg3,
            'end_img4'=>$endimg4,
               'end_img1_title'=>$request->end_img1_title,
            'end_img1_desc'=>$request->end_img1_desc,
            'end_img2_title'=>$request->end_img2_title,
            'end_img2_desc'=>$request->end_img2_desc,
            'end_img3_title'=>$request->end_img3_title,
            'end_img3_desc'=>$request->end_img3_desc,
            'end_img4_title'=>$request->end_img4_title,
            'end_img4_desc'=>$request->end_img4_desc,
        ]);
        $request->session()->flash('success','Service Updated Successfully');

        return back();
    }

    public function delete($id,Request $request){
        $service = Service::findOrFail($id);
        $icon = $service->icon;
        $mainimg = $service->main_img;
        $endimg1 = $service->end_img1;
        $endimg2 = $service->end_img2;
        $endimg3 = $service->end_img3;
        $endimg4 = $service->end_img4;
        Storage::delete($icon);
        Storage::delete($mainimg);
        Storage::delete($endimg1);
        Storage::delete($endimg2);
        Storage::delete($endimg3);
        Storage::delete($endimg4);
        $service->delete();
        $request->session()->flash('success','Service Deleted Successfully');
        return back();
    }
}
