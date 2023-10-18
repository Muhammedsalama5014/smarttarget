<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Branding;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Socialmedia;
use App\Models\SocialmediaPage;
use Illuminate\Http\Request;

class SocialPortfolioController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['allsocial'] = Socialmedia::paginate(3);
        $data['social'] = SocialmediaPage::findOrFail(1);

        return view("web.socialmedia.portfolio-socialmedia")->with($data);
    }

}
