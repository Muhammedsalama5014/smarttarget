<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\SemPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class SemController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['sem'] = SemPage::findOrfail(1);

        return view("web.sem.border-crossings")->with($data);

    }
}
