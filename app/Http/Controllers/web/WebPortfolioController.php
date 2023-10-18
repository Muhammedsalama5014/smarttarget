<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Website;
use App\Models\WebsitePage;
use Illuminate\Http\Request;

class WebPortfolioController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['allsites'] = Website::paginate(3);
        $data['web'] = WebsitePage::findOrFail(1);
        return view("web.web.portfolio-websiteapps")->with($data);
    }
    public function show($id){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['webdesign'] = Website::findOrfail($id);
        return view("web.web.portfolio-websiteapps-inner")->with($data);
    }
}
