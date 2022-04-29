<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data = Blog::orderBy('created_at','DESC')->get();
        return view('dashboard.blog',['data'=>$data]);
    }
    public function store(Request $request){
        if ($request->id) {
            $slider = Blog::find($request->id);
        } else {
            $slider = new Blog();
        }
        $slider->title = $request->title;
     
        $slider->content = $request->content;
        $slider->day = $request->day;
        $slider->month = $request->month;
        $slider->slug = Str::slug($request->title);
        // Log::info($request);
        
        if($request->file('image')){
            $name = date('YmdH') .$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'),$name);
            $slider->image = $name;
        }

        $slider->save();
        return redirect('/admin/blog');
    }
    public function add($id = null){
        $data = Blog::find($id);
        return view('dashboard.blog-add',['data'=>$data]);
    }
    public function delete($id = null){
        Blog::find($id)->delete();
        return redirect('/admin/blog');
    }
}
