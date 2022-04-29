<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Experience;
use App\Models\GeneralSetting;
use App\Models\Main;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $experiences = Main::where('type','experiences')->get()->first();
        $services = Main::where('type','services')->get()->first();
        $blog = Main::where('type','blog')->get()->first();
        $contact = Main::where('type','contact')->get()->first();
        $cv = Main::where('type','cv')->get()->first();

        $blogs = Blog::orderBy('created_at','DESC')->get();
        $servicess = Services::orderBy('created_at','DESC')->get();
        $experiencess_works = Experience::where('type','works')->orderBy('created_at','DESC')->get();
        $experiencess_education = Experience::where('type','education')->orderBy('created_at','DESC')->get();
        $settings = GeneralSetting::get()->first();
        $slider = Slider::get()->first();

        $portfolio = Portfolio::orderBy('created_at','DESC')->get();
    
        $data = [
            'slider'=>$slider,
            'blogs'=>$blogs,
            'servicess'=>$servicess,
            'portfolio'=>$portfolio,
            'experiencess_works'=>$experiencess_works,
            'experiencess_education'=>$experiencess_education,
            'settings'=>$settings,
            'experiences'=>$experiences,
            'services'=>$services,
            'blog'=>$blog, 
            'contact'=>$contact,
            'cv'=>$cv
        ];
        return view('client.home',$data);
    }
    public function blogDetail($id,$slug){
        $settings = GeneralSetting::get()->first();
        $cv = Main::where('type','cv')->get()->first();
        $blog = Blog::find($id);

        $data = [
            
            'settings'=>$settings,
            'cv'=>$cv,
            'blog'=>$blog,
           
        ];
        return view('client.blog-detay',$data);
    }
    public function portfolioDetail($id,$slug){
        $settings = GeneralSetting::get()->first();
        $cv = Main::where('type','cv')->get()->first();
        $blog = Portfolio::find($id);

        $data = [
            
            'settings'=>$settings,
            'cv'=>$cv,
            'blog'=>$blog,
           
        ];
        return view('client.blog-detay',$data);
    }
}
