<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PricingPage;
use App\Models\OtherPlan;
use App\Models\OtherPlanFeature;
use App\Models\SocialPlan;
use App\Models\SocialPlanFeature;
use App\Models\AddFeaturesToSocial;
use App\Models\PlanRequest;
use Illuminate\Support\Facades\Storage;

class AdminPricingController extends Controller
{
    public function index(){
        $data['pricing'] = PricingPage::first();
        return view('admin.pricing.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_title'=>'required|string',
            'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = PricingPage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('branding');
        }

        $service->update([
            'bg_image'=>$bg_image,
             'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Pricing Updated Successfully');

        return back();
    }

    public function showotherplans(){
        $data['otherplans'] = OtherPlan::all();
        return view('admin.pricing.otherplan.showplan',$data);
    }

    public function createotherplans(){
        return view('admin.pricing.otherplan.createplan');
    }

    public function storeotherplans(Request $request){
        $request->validate([
            'icon'=>'required|image|max:2048',
            'title'=>'required|string|max:255',
            'type'=>'required|string',
            'per'=>'required|string',
        ]);
        $path = Storage::putFile("pricing",$request->file('icon'));

        OtherPlan::create([
            'icon'=>$path,
            'title'=>$request->title,
            'type'=>$request->type,
            'per'=>$request->per,
        ]);
        $request->session()->flash('success','Pricing Added Successfully');
        return back();
    }

    public function editotherplans($id){
        $data['otherplan'] = OtherPlan::findOrFail($id);
        return view('admin.pricing.otherplan.editplan',$data);
    }

    public function updateotherplans(Request $request,$id){
        $request->validate([
            'icon'=>'image|max:2048',
            'title'=>'required|string|max:255',
            'type'=>'required|string',
            'per'=>'required|string',
        ]);

        $otherplan = OtherPlan::findOrFail($id);
        // icon upload
        $icon = $otherplan->icon;
        if($request->hasFile('icon')){
            if(Storage::exists($icon)){
                Storage::delete($icon);
            }
            $icon = $request->file('icon')->store('pricing');
        }

        $otherplan->update([
            'icon'=>$icon,
            'title'=>$request->title,
            'type'=>$request->type,
            'per'=>$request->per,
        ]);
        $request->session()->flash('success','Pricing Updated Successfully');
        return back();
    }

    public function deleteotherplans($id){
        $otherplan = OtherPlan::findOrFail($id);
        $icon = $otherplan->icon;
        if(Storage::exists($icon)){
            Storage::delete($icon);
        }
        $otherplan->delete();
        return back();
    }


    public function showotherplansfeatures(){
        $data['otherplanfeatures'] = OtherPlanFeature::all();
        return view('admin.pricing.otherplan.showfeature',$data);
    }

    public function createotherplansfeatures(){
        $data['plans'] = OtherPlan::all();
        return view('admin.pricing.otherplan.createfeature')->with($data);
    }

     public function storeotherplansfeatures(Request $request){
        $request->validate([
            'other_plan_id'=>'required',
            'title'=>'required|string|max:255',
            'price'=>'required|string',
        ]);

        OtherPlanFeature::create([
            'other_plan_id'=>$request->other_plan_id,
            'title'=>$request->title,
            'price'=>$request->price,
        ]);
        $request->session()->flash('success','Pricing Added Successfully');
        return back();
    }

    public function editotherplansfeatures($id){
        $data['otherplanfeature'] = OtherPlanFeature::findOrFail($id);
        $data['plans'] = OtherPlan::all();
        return view('admin.pricing.otherplan.editfeature')->with($data);
    }

    public function updateotherplansfeatures(Request $request,$id){
        $request->validate([
            'other_plan_id'=>'required',
            'title'=>'required|string|max:255',
            'price'=>'required|string',
        ]);

        $otherplanfeature = OtherPlanFeature::findOrFail($id);
        $otherplanfeature->update([
            'other_plan_id'=>$request->other_plan_id,
            'title'=>$request->title,
            'price'=>$request->price,
        ]);
        $request->session()->flash('success','Pricing Updated Successfully');
        return back();
    }

    public function deleteotherplansfeatures($id){
        $otherplanfeature = OtherPlanFeature::findOrFail($id);
        $otherplanfeature->delete();
        return back();
    }


    public function showpricingplans(){
        $data['socialplans'] = SocialPlan::all();
        return view('admin.pricing.socialplan.showplan',$data);
    }

    public function createpricingplans(){
        return view('admin.pricing.socialplan.createplan');
    }

    public function storepricingplans(Request $request){
        $request->validate([
            'icon'=>'required|image|max:2048',
            'title'=>'required|string|max:255',
            'price'=>'required|string',
        ]);
        $path = Storage::putFile("pricing",$request->file('icon'));

        SocialPlan::create([
            'icon'=>$path,
            'title'=>$request->title,
            'price'=>$request->price,
        ]);
        $request->session()->flash('success','Pricing Added Successfully');
        return back();
    }

    public function editpricingplans($id){
        $data['socialplan'] = SocialPlan::findOrFail($id);
        return view('admin.pricing.socialplan.editplan',$data);
    }

    public function updatepricingplans(Request $request,$id){
        $request->validate([
            'icon'=>'image|max:2048',
            'title'=>'required|string|max:255',
            'price'=>'required|string',
        ]);

        $socialplan = SocialPlan::findOrFail($id);
        // icon upload
        $icon = $socialplan->icon;
        if($request->hasFile('icon')){
            if(Storage::exists($icon)){
                Storage::delete($icon);
            }
            $icon = $request->file('icon')->store('pricing');
        }

        $socialplan->update([
            'icon'=>$icon,
            'title'=>$request->title,
            'price'=>$request->price,
        ]);
        $request->session()->flash('success','Pricing Updated Successfully');
        return back();
    }

    public function deletepricingplans($id){
        $socialplan = SocialPlan::findOrFail($id);
        $icon = $socialplan->icon;
        if(Storage::exists($icon)){
            Storage::delete($icon);
        }
        $socialplan->delete();
        return back();
    }

    public function showpricingplansfeatures(){
        $data['socialplanfeatures'] = SocialPlanFeature::all();
        return view('admin.pricing.socialplan.showfeature',$data);
    }

    public function createpricingplansfeatures(){
        return view('admin.pricing.socialplan.createfeature');
    }
    
    public function storepricingplansfeatures(Request $request){
        $request->validate([
            'title'=>'required|string|max:255',
        ]);

        SocialPlanFeature::create([
            'title'=>$request->title,
        ]);
        $request->session()->flash('success','Pricing Added Successfully');
        return back();
    }

    public function editpricingplansfeatures($id){
        $data['socialplanfeature'] = SocialPlanFeature::findOrFail($id);
        return view('admin.pricing.socialplan.editfeature')->with($data);
    }

    public function updatepricingplansfeatures(Request $request,$id){
        $request->validate([
            'title'=>'required|string|max:255',
        ]);

        $socialplanfeature = SocialPlanFeature::findOrFail($id);
        $socialplanfeature->update([
            'title'=>$request->title,
        ]);
        $request->session()->flash('success','Pricing Updated Successfully');
        return back();
    }

    public function deletesocialplansfeatures($id){
        $socialplanfeature = SocialPlanFeature::findOrFail($id);
        $socialplanfeature->delete();
        return back();
    }

    public function showfinal(){
        $data['features'] = SocialPlanFeature::all();
        $data['plans'] = SocialPlan::all();
        $data['finals'] = AddFeaturesToSocial::all();
        return view('admin.pricing.socialplan.adddata',$data);
    }

    public function storefinal(Request $request)
    {
        $request->validate([
            'social_plans' => 'required|string|max:255',
            'social_plan_features' => 'required|string|max:255',
        ]);

        // Split the input values using a delimiter
        $values = explode(',', $request->input('social_plans'));

        $features = explode(',', $request->input('social_plan_features'));

        $social_plan_id = $values[0];
        $social_plan_name = $values[1];

        $social_plan_feature_id = $features[0];
        $social_plan_feature_name = $features[1];

        AddFeaturesToSocial::create([
            'social_plan_id' => $social_plan_id,
            'social_plan_feature_id' => $social_plan_feature_id,
            'social_plan_name' => $social_plan_name,
            'social_plan_feature_name' => $social_plan_feature_name,
        ]);

        $request->session()->flash('success', 'Feature Added Successfully');
        return back();
    }

    public function deletefinal($id){
        $socialplanfeature = AddFeaturesToSocial::findOrFail($id);
        $socialplanfeature->delete();
        return back();
    }

    public function planrequest(){
        $data['requests'] = PlanRequest::all();
        return view('admin.pricing.request',$data);
    }


}
