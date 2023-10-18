<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\Setting;
use App\Models\BrandGoals;
use App\Models\Branding;
use App\Models\Motion;
use App\Models\Socialmedia;
use App\Models\Voice;
use App\Models\Website;
use App\Models\Clients;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        $data['home'] = HomePage::findOrFail(1);
        $data['setting'] = Setting::findOrFail(1);
        $data['brandings'] = Branding::all();
        $data['motions'] = Motion::all();
        $data['socials'] = Socialmedia::all();
        $data['voices'] = Voice::all();
        $data['websites'] = Website::all();
        $data['clients'] = Clients::all();
        $data['blogs'] = Blog::all();
        $data['teams'] = Team::all();
        $data['services'] = Service::all();
        return view('web.index')->with($data);
    }

    public function create(Request $request){
        $request->validate([
            'name'=>'required|max:2048',
            'budget'=>'required|string',
            'email'=>'required|string',
            'goals'=>'required|string',
            'phone'=>'required|string',
        ]);

        BrandGoals::create([
            'name'=>$request->name,
            'budget'=>$request->budget,
            'email'=>$request->email,
            'goals'=>$request->goals,
            'phone'=>$request->phone,
        ]);
        $request->session()->flash('success','Clients Added Successfully');
        return back();
    }
    public function hhh(){
        $data['services'] = Service::all();
        $data['setting'] = Setting::findOrFail(1);
        return view('web.portfolio')->with($data);
    }
}
