<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Voice;
use App\Models\VoicePage;
use Illuminate\Http\Request;

class VoicePortfolioController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['allvoice'] = Voice::paginate(3);
        $data['voice'] = VoicePage::findOrFail(1);

        return view("web.voiceover.portfolio-voiceover")->with($data);
    }
}
