<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\BrandingPage;
use App\Models\MotionPage;
use App\Models\Portfolio;
use App\Models\SemPage;
use App\Models\SeoPage;
use App\Models\Service;
use App\Models\Setting;

use App\Models\SocialmediaPage;
use App\Models\VoicePage;
use App\Models\WebsitePage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['branding'] = BrandingPage::findOrfail(1);
        $data['webdesign'] = WebsitePage::findOrfail(1);
        $data['motion'] = MotionPage::findOrfail(1);
        $data['seo'] = SeoPage::findOrfail(1);
        $data['sem'] = SemPage::findOrfail(1);
        $data['social'] = SocialmediaPage::findOrfail(1);
        $data['voice'] = VoicePage::findOrfail(1);
        return view('web.portfolio')->with($data);
    }
}
