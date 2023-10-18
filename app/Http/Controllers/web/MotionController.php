<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\MotionPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class MotionController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['motion'] = MotionPage::findOrfail(1);
        return view("web.motion.graphic-motion")->with($data);

    }
}
