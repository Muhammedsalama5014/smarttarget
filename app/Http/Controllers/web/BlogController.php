<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogPage;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $data['setting'] = Setting::findOrFail(1);
        $data['blogs'] = Blog::paginate(3);
        $data['blog'] = BlogPage::findOrfail(1);
        $data['services'] = Service::all();
        return view('web.blog.blog')->with($data);
    }
    public function show($id){
        $data['setting'] = Setting::findOrFail(1);
        $data['services'] = Service::all();
        $data['blogs'] = Blog::findOrfail($id);
        return view('web.blog.blog-inner')->with($data);
    }
}
