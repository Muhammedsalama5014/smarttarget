<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\WebsitePage;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['design'] = WebsitePage::findOrfail(1);

        return view("web.web.design")->with($data);

    }
}
