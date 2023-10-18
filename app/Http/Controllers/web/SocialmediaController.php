<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\SocialmediaPage;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['socialpage'] = SocialmediaPage::findOrfail(1);

        return view("web.socialmedia.social-media")->with($data);

    }
}
