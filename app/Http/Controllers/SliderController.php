<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $data = Slider::all()->first();
        return view('dashboard.slider',['data'=>$data]);
    }
    public function store(Request $request){
        if ($request->id) {
            $slider = Slider::find($request->id);
        } else {
            $slider = new Slider();
        }
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->animasyon = $request->animasyon;

        $slider->save();
        return redirect()->back();
    }

}
