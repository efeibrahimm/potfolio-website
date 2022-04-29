<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index(){
        $data = Portfolio::orderBy('created_at','DESC')->get();
        return view('dashboard.portfolio',['data'=>$data]);
    }
    public function store(Request $request){
        if ($request->id) {
            $slider = Portfolio::find($request->id);
        } else {
            $slider = new Portfolio();
        }
        $slider->title = $request->title;
     
        $slider->content = $request->content;
        $slider->date = $request->date;
        $slider->client = $request->client;
        $slider->role = $request->role;
        $slider->url = $request->url;
        $slider->slug = Str::slug($request->title);

        // Log::info($request);
        
        if($request->file('image')){
            $name = date('YmdH') .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'),$name);
            $slider->image = $name;
        }

        $slider->save();
        return redirect('/admin/portfolio');
    }
    public function add($id = null){
        $data = Portfolio::find($id);
        return view('dashboard.portfolio-add',['data'=>$data]);
    }
    public function delete($id = null){
        Portfolio::find($id)->delete();
        return redirect('/admin/portfolio');
    }
}
