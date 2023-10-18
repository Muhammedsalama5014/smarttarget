<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPage;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    public function index(){
        $data['blog'] = BlogPage::first();
        return view('admin.blog.index',$data);
    }

    public function updatepage(Request $request){
        $request->validate([
            'bg_image'=>'image',
            'bg_image_title'=>'required|string',
            'bg_image_desc'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);
        $service = BlogPage::findOrFail(1);
        // bg_image upload
        $bg_image = $service->bg_image;
        if($request->hasFile('bg_image')){
            if(Storage::exists($bg_image)){
                Storage::delete($bg_image);
            }
            $bg_image = $request->file('bg_image')->store('blog');
        }

        $service->update([
            'bg_image'=>$bg_image,
            'bg_image_title'=>$request->bg_image_title,
            'bg_image_desc'=>$request->bg_image_desc,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Blog Updated Successfully');

        return back();
    }

    public function show(){
        $data['blogs'] = Blog::all();
        return view('admin.blog.show',$data);
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){
        $request->validate([
            'image'=>'required|image|max:2048',
            'image_title'=>'required|string',
            'image_desc'=>'required|string',
            'title'=>'required|string|max:255',
            's_description'=>'required|string',
            'l_description'=>'required|string',
            'blog_title_url'=>'required|string',
        ]);
        $path = Storage::putFile("blog",$request->file('image'));

        Blog::create([
            'image'=>$path,
            'image_title'=>$request->image_title,
            'image_desc'=>$request->image_desc,
            'title'=>$request->title,
            's_description'=>$request->s_description,
            'l_description'=>$request->l_description,
            'blog_title_url'=>$request->blog_title_url,
        ]);
        $request->session()->flash('success','Blog Added Successfully');
        return back();
    }

    public function edit($id){
        $data['blog'] = Blog::findOrFail($id);
        return view('admin.blog.edit',$data);
    }

    public function update(Request $request,$id){
        $request->validate([
            'image'=>'required|image|max:2048',
            'image_title'=>'required|string',
            'image_desc'=>'required|string',
            'title'=>'required|string|max:255',
            's_description'=>'required|string',
            'l_description'=>'required|string',
        ]);
        $blog = Blog::findOrFail($request->id);
        // icon upload
        $path = $blog->image;
        if($request->hasFile('image')){
            Storage::delete($path);
            $path = Storage::putFile("blog",$request->file('image'));
        }
        $blog->update([
            'image'=>$path,
             'image_title'=>$request->image_title,
            'image_desc'=>$request->image_desc,
            'title'=>$request->title,
          's_description'=>$request->s_description,
            'l_description'=>$request->l_description,
        ]);
        $request->session()->flash('success','Blog Updated Successfully');
        return back();
    }
    
    public function delete($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return back();
    }
}
