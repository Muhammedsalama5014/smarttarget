<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServicePage;
use App\Models\Setting;

class ServiceController extends Controller
{
    public function index(){
        $data['servic'] = ServicePage::findOrFail(1);
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();

        return view('web.services')->with($data);
    }
}
