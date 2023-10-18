<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\SeoPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class SeoPortfolioController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['allsocial'] = Seo::paginate(3);
        $data['social'] = SeoPage::findOrFail(1);

        return view("web.socialmedia.portfolio-socialmedia")->with($data);
    }
}
