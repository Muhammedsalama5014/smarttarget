<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Branding;
use App\Models\BrandingPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class BrandingPortfolioController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['allbranding'] = Branding::paginate(3);
        $data['branding'] = BrandingPage::findOrFail(1);
        return view("web.branding.portfolio-branding")->with($data);
    }
    public function show($id){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['branding'] = Branding::findOrfail($id);
        return view("web.branding.portfolio-branding-inner")->with($data);
    }
}
