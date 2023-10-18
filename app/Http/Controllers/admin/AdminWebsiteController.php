<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\WebsitePage;
use Illuminate\Support\Facades\Storage;

class AdminWebsiteController extends Controller
{
    public function index(){
        $data['website'] = WebsitePage::first();
        return view('admin.websites.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
             'bg_image_title'=>'required|string',
             'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = WebsitePage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('website');
        }

        $service->update([
            'bg_image'=>$bg_image,
            'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Website Updated Successfully');

        return back();
    }

    public function show(){
        $data['websites'] = Website::all();
        return view('admin.websites.show',$data);
    }

    public function create(){
        return view('admin.websites.create');
    }

    public function store(Request $request){
        $request->validate([
            'type' => 'required',
            'main_image'=>'required|image|max:2048',
             'main_image_title'=>'required|string',
             'main_image_desc'=>'required|string',
            'title'=>'required|string|max:255',
            's_description'=>'required|string',
            'image1'=>'required|image|max:2048',
            'image2'=>'required|image|max:2048',
            'image3'=>'required|image|max:2048',
             'image1_title'=>'required|string',
            'image1_desc'=>'required|string',
            'image2_title'=>'required|string',
            'image2_desc'=>'required|string',
            'image3_title'=>'required|string',
            'image3_desc'=>'required|string',
            'sec1_image'=>'required|image|max:2048',
            'sec1_title'=>'required|string|max:255',
            'sec1_description'=>'required|string',
            'sec2_image'=>'required|image|max:2048',
            'sec2_title'=>'required|string|max:255',
            'sec2_description'=>'required|string',
            
             'sec1_image_title'=>'required|string',
            'sec1_image_desc'=>'required|string',
            'sec2_image_title'=>'required|string',
            'sec2_image_desc'=>'required|string',
         
            
        ]);
        $main_image = Storage::putFile("websites",$request->file('main_image'));
        $image1 = Storage::putFile("websites",$request->file('image1'));
        $image2 = Storage::putFile("websites",$request->file('image2'));
        $image3 = Storage::putFile("websites",$request->file('image3'));
        $sec1_image = Storage::putFile("websites",$request->file('sec1_image'));
        $sec2_image = Storage::putFile("websites",$request->file('sec2_image'));

        Website::create([
            'type'=>$request->type,
            'main_image'=>$main_image,
            'title'=>$request->title,
            's_description'=>$request->s_description,
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>'1.png',
            'sec1_image'=>$sec1_image,
            'sec1_title'=>$request->sec1_title,
            'sec1_description'=>$request->sec1_description,
            'sec2_image'=>$sec2_image,
            'sec2_title'=>$request->sec2_title,
            'sec2_description'=>$request->sec2_description,
             'main_image_title'=>$request->main_image_title,
            'main_image_desc'=>$request->main_image_desc,
                 'image1_title'=>$request->image1_title,
            'image1_desc'=>$request->image1_desc,
            'image2_title'=>$request->image2_title,
            'image2_desc'=>$request->image2_desc,
            'image3_title'=>$request->image3_title,
            'image3_desc'=>$request->image3_desc,
            
              'sec1_image_title'=>$request->sec1_image_title,
            'sec1_image_desc'=>$request->sec1_image_desc,
            'sec2_image_title'=>$request->sec2_image_title,
            'sec2_image_desc'=>$request->sec2_image_desc,
        ]);

        $request->session()->flash('success','Website Created Successfully');
        return back();
    }

    public function edit($id){
        $data['website'] = Website::findOrFail($id);
        return view('admin.websites.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'type' =>'required',
            'main_image'=>'image|max:2048',
            'title'=>'required|string|max:255',
            's_description'=>'required|string',
            'image1'=>'image|max:2048',
            'image2'=>'image|max:2048',
            'image3'=>'image|max:2048',
            'sec1_image'=>'image|max:2048',
            'sec1_title'=>'required|string|max:255',
            'sec1_description'=>'required|string',
            'sec2_image'=>'image|max:2048',
            'sec2_title'=>'required|string|max:255',
            'sec2_description'=>'required|string',
            
        ]);

        $website = Website::findOrFail($id);

        $main_image = $website->main_image;
        if($request->hasFile('main_image')){
            if(Storage::exists($main_image)){
                Storage::delete($main_image);
            }
            $main_image = $request->file('main_image')->store('website');
        }
        $image1 = $website->image1;
        if($request->hasFile('image1')){
            if(Storage::exists($image1)){
                Storage::delete($image1);
            }
            $image1 = $request->file('image1')->store('website');
        }

        $image2 = $website->image2;
        if($request->hasFile('image2')){
            if(Storage::exists($image2)){
                Storage::delete($image2);
            }
            $image2 = $request->file('image2')->store('website');
        }

        $image3 = $website->image3;
        if($request->hasFile('image3')){
            if(Storage::exists($image3)){
                Storage::delete($image3);
            }
            $image3 = $request->file('image3')->store('website');
        }

        $sec1_image = $website->sec1_image;
        if($request->hasFile('sec1_image')){
            if(Storage::exists($sec1_image)){
                Storage::delete($sec1_image);
            }
            $sec1_image = $request->file('sec1_image')->store('website');
        }

        $sec2_image = $website->sec2_image;
        if($request->hasFile('sec2_image')){
            if(Storage::exists($sec2_image)){
                Storage::delete($sec2_image);
            }
            $sec2_image = $request->file('sec2_image')->store('website');
        }

        $website->update([
            'type'=>$request->type,
            'main_image'=>$main_image,
            'title'=>$request->title,
            's_description'=>$request->s_description,
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>'1.png',
            'sec1_image'=>$sec1_image,
            'sec1_title'=>$request->sec1_title,
            'sec1_description'=>$request->sec1_description,
            'sec2_image'=>$sec2_image,
            'sec2_title'=>$request->sec2_title,
            'sec2_description'=>$request->sec2_description,
        ]);

        $request->session()->flash('success','Website Updated Successfully');
        return back();
    }
    
    public function delete($id){
        $website = Website::findOrFail($id);
        $website->delete();
        return back();
    }
}
