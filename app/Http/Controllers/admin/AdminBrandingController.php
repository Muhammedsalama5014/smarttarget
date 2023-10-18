<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branding;
use App\Models\BrandingPage;
use Illuminate\Support\Facades\Storage;


class AdminBrandingController extends Controller
{
    public function index(){
        $data['branding'] = BrandingPage::first();
        return view('admin.branding.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_title'=>'required|string',
             'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = BrandingPage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('branding');
        }

        $service->update([
            'bg_image'=>$bg_image,
            'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Branding Updated Successfully');

        return back();
    }

    public function show(){
        $data['brandings'] = Branding::all();
        return view('admin.branding.show',$data);
    }

    public function create(){
        return view('admin.branding.create');
    }

    public function store(Request $request){
        $request->validate([
            'main_image'=>'required|image|max:2048',
             'main_image_title'=>'required|string',
             'main_image_desc'=>'required|string',
            'title'=>'required|string|max:255',
            'categories'=>'required|string',
            's_description'=>'required|string',
            'l_description'=>'required|string',
            'image1'=>'required|image|max:2048',
            'image2'=>'required|image|max:2048',
            'image3'=>'required|image|max:2048',
            'image4'=>'required|image|max:2048',
            'image1_title'=>'required|string',
            'image1_desc'=>'required|string',
            'image2_title'=>'required|string',
            'image2_desc'=>'required|string',
            'image3_title'=>'required|string',
            'image3_desc'=>'required|string',
            'image4_title'=>'required|string',
            'image4_desc'=>'required|string',
        ]);
        $main_image = Storage::putFile("branding",$request->file('main_image'));
        $image1 = Storage::putFile("branding",$request->file('image1'));
        $image2 = Storage::putFile("branding",$request->file('image2'));
        $image3 = Storage::putFile("branding",$request->file('image3'));
        $image4 = Storage::putFile("branding",$request->file('image4'));

        Branding::create([
          'main_image'=>$main_image,
          'main_image_title'=>$request->main_image_title,
            'main_image_desc'=>$request->main_image_desc,
            'title'=>$request->title,
            'categories'=>$request->categories,
            's_description'=>$request->s_description,
            'l_description'=>$request->l_description,
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>$image4,
            
            'image1_title'=>$request->image1_title,
            'image1_desc'=>$request->image1_desc,
            'image2_title'=>$request->image2_title,
            'image2_desc'=>$request->image2_desc,
            'image3_title'=>$request->image3_title,
            'image3_desc'=>$request->image3_desc,
            'image4_title'=>$request->image4_title,
            'image4_desc'=>$request->image4_desc,
        ]);
        $request->session()->flash('success','Branding Added Successfully');
        return back();
    }

    public function edit($id){
        $data['branding'] = Branding::findOrFail($id);
        return view('admin.branding.edit',$data);
    }

    public function update(Request $request,$id){
        $request->validate([
            'main_image'=>'image|max:2048',
            'title'=>'required|string|max:255',
            'categories'=>'required|string',
            's_description'=>'required|string',
            'l_description'=>'required|string',
            'image1'=>'image|max:2048',
            'image2'=>'image|max:2048',
            'image3'=>'image|max:2048',
            'image4'=>'image|max:2048',
        ]);
        $branding = Branding::findOrFail($id);
        // main_image upload
        $main_image = $branding->main_image;
        if($request->hasFile('main_image')){
            if(Storage::exists($main_image)){
                Storage::delete($main_image);
            }
            $main_image = $request->file('main_image')->store('branding');
        }

        // image1 upload
        $image1 = $branding->image1;
        if($request->hasFile('image1')){
            if(Storage::exists($image1)){
                Storage::delete($image1);
            }
            $image1 = $request->file('image1')->store('branding');
        }

        // image2 upload
        $image2 = $branding->image2;
        if($request->hasFile('image2')){
            if(Storage::exists($image2)){
                Storage::delete($image2);
            }
            $image2 = $request->file('image2')->store('branding');
        }

        // image3 upload
        $image3 = $branding->image3;
        if($request->hasFile('image3')){
            if(Storage::exists($image3)){
                Storage::delete($image3);
            }
            $image3 = $request->file('image3')->store('branding');
        }

        // image4 upload
        $image4 = $branding->image4;
        if($request->hasFile('image4')){
            if(Storage::exists($image4)){
                Storage::delete($image4);
            }
            $image4 = $request->file('image4')->store('branding');
        }
        $branding->update([
            'main_image'=>$main_image,
            'title'=>$request->title,
            'categories'=>$request->categories,
            's_description'=>$request->s_description,
            'l_description'=>$request->l_description,
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>$image4,
        ]);
        $request->session()->flash('success','Branding Updated Successfully');
        return back();
    }

    public function delete($id){
        $branding = Branding::findOrFail($id);
        $branding->delete();
        return back();
    }

}
