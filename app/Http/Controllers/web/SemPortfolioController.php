<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class SemPortfolioController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['allsocial'] = Socialmedia::paginate(3);
        $data['social'] = SocialmediaPage::findOrFail(1);

        return view("web.socialmedia.portfolio-socialmedia")->with($data);
    }
}
