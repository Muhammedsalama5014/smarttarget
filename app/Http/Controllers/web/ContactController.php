<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\ContactMessages;
use App\Models\ContactPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['contact'] = ContactPage::findOrFail(1);
        return view("web.letstalk")->with($data);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email',
            'phone'=>'required|string|max:255',
            'message'=>'required|string',

        ]);


        ContactMessages::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,

        ]);

        return back();
    }
}
