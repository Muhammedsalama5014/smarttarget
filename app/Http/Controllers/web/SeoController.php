<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\SeoPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['seo'] = SeoPage::findOrfail(1);
        return view("web.seo.seo")->with($data);

    }
}
