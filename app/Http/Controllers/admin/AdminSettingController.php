<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class AdminSettingController extends Controller
{
    public function index(){
        $data['setting'] = Setting::findOrFail(1);
        return view('admin.setting.index', $data);
    }

    public function update(Request $request){
        $request->validate([
            'logo'=>'image',
            'name'=>'required|string',
            'description'=>'required|string',
            'keywords'=>'required|string',
            'icon'=>'image',
            'footer_description'=>'required|string',
            'address'=>'required|string',
            'phone1'=>'required|string',
            'phone2'=>'required|string',
            'email'=>'required|string',
            'facebook'=>'required|string',
            'instagram'=>'required|string',
            'twitter'=>'required|string',
            'behance'=>'required|string',
            'messanger'=>'required|string',
            'whatsapp'=>'required|string',
            'telegram'=>'required|string',
        ]);
        $setting = Setting::findOrFail(1);
        // logo upload
        $path = $setting->logo;
        if($request->hasFile('logo')){
            if(Storage::exists($path)){
                Storage::delete($path);
            }
            $path = $request->file('logo')->store('setting');
        }

        $icon = $setting->icon;
        if($request->hasFile('icon')){
            if(Storage::exists($icon)){
                Storage::delete($icon);
            }
            $icon = $request->file('icon')->store('setting');
        }

        $setting->update([
            'logo'=>$path,
            'name'=>$request->name,
            'description'=>$request->description,
            'keywords'=>$request->keywords,
            'icon'=>$icon,
            'footer_description'=>$request->footer_description,
            'address'=>$request->address,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
            'behance'=>$request->behance,
            'messanger'=>$request->messanger,
            'whatsapp'=>$request->whatsapp,
            'telegram'=>$request->telegram,
        ]);
        $request->session()->flash('success','Setting Updated Successfully');

        return back();
    }
}
