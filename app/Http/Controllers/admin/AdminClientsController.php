<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;
use Illuminate\Support\Facades\Storage;

class AdminClientsController extends Controller
{
    public function show(){
        $data['clients'] = Clients::all();
        return view('admin.clients.index',$data);
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|image|max:2048',
            'name_title'=>'required|string',
            'name_desc'=>'required|string',
            'link'=>'required|string',
        ]);
        $path = Storage::putFile("clients",$request->file('name'));

        Clients::create([
            'name'=>$path,
             'name_title'=>$request->name_title,
            'name_desc'=>$request->name_desc,
            'link'=>$request->link,
        ]);
        $request->session()->flash('success','Clients Added Successfully');
        return back();
    }

    public function edit($id){
        $data['client'] = Clients::find($id);
        return view('admin.clients.edit',$data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'image|max:2048',
            'name_title'=>'required|string',
            'name_desc'=>'required|string',
            'link'=>'required|string',
        ]);

        $hiring = Clients::findOrFail($id);
        // img upload
        $img = $hiring->name;
        if($request->hasFile('name')){
            if(Storage::exists($img)){
                Storage::delete($img);
            }
            $img = $request->file('name')->store('clients');
        }

        Clients::find($id)->update([
            'name'=>$img,
             'name_title'=>$request->name_title,
            'name_desc'=>$request->name_desc,
            'link'=>$request->link,
        ]);
        $request->session()->flash('success','Clients Updated Successfully');
        return back();
    }

    public function delete($id){
        Clients::find($id)->delete();
        return back();
    }

}
