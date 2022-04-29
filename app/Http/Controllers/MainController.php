<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index1(){
        
        return view('dashboard.home');
    }
    public function index(){
        $experiences = Main::where('type','experiences')->get()->first();
        $services = Main::where('type','services')->get()->first();
        $blog = Main::where('type','blog')->get()->first();
        $contact = Main::where('type','contact')->get()->first();
        $cv = Main::where('type','cv')->get()->first();
        return view('dashboard.main',['experiences'=>$experiences, 'services'=>$services,'blog'=>$blog, 'contact'=>$contact,'cv'=>$cv]);
    }
    public function store(Request $request){
        if ($request->id) {
            $slider = Main::find($request->id);
        } else {
            $slider = new Main();
        }
        $slider->type = $request->type;     
        $slider->content = $request->content;
        // Log::info($request);
        
        if($request->file('file')){
            $name = date('YmdH') .$request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('images'),$name);
            $slider->file = $name;
        }

        $slider->save();
        return redirect('/admin/main');
    }
}
