<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BestProject;
use Illuminate\Support\Facades\Storage;

class AdminBestController extends Controller
{
    public function index(){
        $data['bests'] = BestProject::all();
        return view('admin.bestofthemonth.show', $data);
    }
    public function create(){
        return view('admin.bestofthemonth.create');
    }



    public function store(Request $request){
        $request->validate([
            'month_name'=>'required|string',
            'image1'=>'image',
            'image2'=>'image',
            'image3'=>'image',
            'image4'=>'image',
            'image5'=>'image',
            'image1_title'=>'required|string',
            'image1_desc'=>'required|string',
            'image2_title'=>'required|string',
            'image2_desc'=>'required|string',
            'image3_title'=>'required|string',
            'image3_desc'=>'required|string',
            'image4_title'=>'required|string',
            'image4_desc'=>'required|string',
            'image5_title'=>'required|string',
            'image5_desc'=>'required|string',
        ]);
        $image1 = Storage::putFile("BestProject",$request->file('image1'));
        $image2 = Storage::putFile("BestProject",$request->file('image2'));
        $image3 = Storage::putFile("BestProject",$request->file('image3'));
        $image4 = Storage::putFile("BestProject",$request->file('image4'));
        $image5 = Storage::putFile("BestProject",$request->file('image5'));

        BestProject::create([
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>$image4,
            'image5'=>$image5,
            'image1_title'=>$request->image1_title,
            'image1_desc'=>$request->image1_desc,
            'image2_title'=>$request->image2_title,
            'image2_desc'=>$request->image2_desc,
            'image3_title'=>$request->image3_title,
            'image3_desc'=>$request->image3_desc,
            'image4_title'=>$request->image4_title,
            'image4_desc'=>$request->image4_desc,
            'image5_title'=>$request->image5_title,
            'image5_desc'=>$request->image5_desc,
            'month_name'=>$request->month_name,
        ]);
        $request->session()->flash('success','Month Added Successfully');
        return back();
    }


    public function edit($id){
        $data['best'] = BestProject::find($id);
        return view('admin.bestofthemonth.edit',$data);
    }
    public function update(Request $request , $id){
        $request->validate([
            'month_name'=>'required|string',
            'image1'=>'image',
            'image2'=>'image',
            'image3'=>'image',
            'image4'=>'image',
            'image5'=>'image',
            'image1_title'=>'required|string',
            'image1_desc'=>'required|string',
            'image2_title'=>'required|string',
            'image2_desc'=>'required|string',
            'image3_title'=>'required|string',
            'image3_desc'=>'required|string',
            'image4_title'=>'required|string',
            'image4_desc'=>'required|string',
            'image5_title'=>'required|string',
            'image5_desc'=>'required|string',
        ]);
        $best = BestProject::findOrFail($id);
        // Video upload
        $image1 = $best->image1;
        if($request->hasFile('image1')){
            if(Storage::exists($image1)){
                Storage::delete($image1);
            }
            $image1 = $request->file('image1')->store('BestProject');
        }

        $image2 = $best->image2;
        if($request->hasFile('image2')){
            if(Storage::exists($image2)){
                Storage::delete($image2);
            }
            $image2 = $request->file('image2')->store('BestProject');
        }

        $image3 = $best->image3;
        if($request->hasFile('image3')){
            if(Storage::exists($image3)){
                Storage::delete($image3);
            }
            $image3 = $request->file('image3')->store('BestProject');
        }

        $image4 = $best->image4;
        if($request->hasFile('image4')){
            if(Storage::exists($image4)){
                Storage::delete($image4);
            }
            $image4 = $request->file('image4')->store('BestProject');
        }

        $image5 = $best->image5;
        if($request->hasFile('image5')){
            if(Storage::exists($image5)){
                Storage::delete($image5);
            }
            $image5 = $request->file('image5')->store('BestProject');
        }

        $best->update([
            'image1'=>$image1,
            'image2'=>$image2,
            'image3'=>$image3,
            'image4'=>$image4,
            'image5'=>$image5,
            'image1_title'=>$request->image1_title,
            'image1_desc'=>$request->image1_desc,
            'image2_title'=>$request->image2_title,
            'image2_desc'=>$request->image2_desc,
            'image3_title'=>$request->image3_title,
            'image3_desc'=>$request->image3_desc,
            'image4_title'=>$request->image4_title,
            'image4_desc'=>$request->image4_desc,
            'image5_title'=>$request->image5_title,
            'image5_desc'=>$request->image5_desc,
          'month_name'=>$request->month_name,
        ]);

        $request->session()->flash('success','Month updated Successfully');
        return back();
    }


    public function delete($id){
        BestProject::find($id)->delete();
        return back();
    }
}
