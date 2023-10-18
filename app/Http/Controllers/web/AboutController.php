<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use App\Models\Setting;
use App\Models\Service;
use App\Models\Team;

class AboutController extends Controller
{
    public function index(){
        $data['about'] = AboutPage::findOrFail(1);
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['teams'] = Team::all();
        return view('web.about')->with($data);
    }
}
