<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Hiring;
use App\Models\HiringPage;
use App\Models\HiringRequest;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HiringController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['hiring'] = HiringPage::findOrfail(1);
        $data['alljobs'] = Hiring::paginate(4);
        return view("web.hiring.hiring")->with($data);
    }
    public function show($id){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['hiring'] = Hiring::findOrfail($id);
        return view("web.hiring.hiring-inner")->with($data);
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email',
            'phone'=>'required|string|max:255',
            'cover'=>'required|string',
            'filename'=>'required|mimes:pdf,doc,docx,PDF,DOC,DOCX',
        ]);
        $path = Storage::putFile("hiringCv",$request->file('filename'));

        HiringRequest::create([
            'hiring_id' => $request->hiringId,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'cover_letter'=>$request->cover,
            'cv'=>$path,
        ]);

        return back();
    }
}
