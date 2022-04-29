<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        $data = Experience::orderBy('created_at','DESC')->get();
        return view('dashboard.experience',['data'=>$data]);
    }
    public function store(Request $request){
        if ($request->id) {
            $slider = Experience::find($request->id);
        } else {
            $slider = new Experience();
        }
        $slider->title = $request->title;
        $slider->start_yerar = $request->start_year;
        $slider->end_year = $request->end_year;
        $slider->type = $request->type;
        $slider->content = $request->content;

        $slider->save();
        return redirect('/admin/experience');
    }
    public function add($id = null){
        $data = Experience::find($id);
        return view('dashboard.experience-add',['data'=>$data]);
    }
    public function delete($id = null){
        Experience::find($id)->delete();
        return redirect('/admin/experience');
    }
}
