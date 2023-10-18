<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Motion;
use App\Models\MotionPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class MotionPortfolioController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['allmotion'] = Motion::paginate(3);
        $data['motion'] = MotionPage::findOrFail(1);
        return view("web.motion.portfolio-production")->with($data);
    }

    public function show($id){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['motion'] = Motion::findOrfail($id);
        return view("web.motion.portfolio-production-inner")->with($data);
    }
}
