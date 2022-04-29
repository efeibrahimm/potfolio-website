<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $data = Services::orderBy('created_at','DESC')->get();
        return view('dashboard.services',['data'=>$data]);
    }
    public function store(Request $request){
        if ($request->id) {
            $slider = Services::find($request->id);
        } else {
            $slider = new Services();
        }
        $slider->title = $request->title;
        $slider->icon = $request->icon;
        $slider->content = $request->content;

    $slider->save();
        return redirect('/admin/services');
    }
    public function add($id = null){
        $data = Services::find($id);
        return view('dashboard.services-add',['data'=>$data]);
    }
    public function delete($id = null){
        Services::find($id)->delete();
        return redirect('/admin/services');
    }
}
