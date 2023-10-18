<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Branding;
use App\Models\BrandingPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class BrandingController extends Controller
{
    public function index(){

        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['branding'] = BrandingPage::findOrfail(1);
        return view('web.branding.branding')->with($data);

    }
}
