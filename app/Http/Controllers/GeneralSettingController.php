<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index(){
        $data = GeneralSetting::all()->first();
        return view('dashboard.setting',['data'=>$data]);
    }
    public function store(Request $request){
        if ($request->id) {
            $setting = GeneralSetting::find($request->id);
        } else {
            $setting = new GeneralSetting();
        }
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->website = $request->website;
        $setting->address = $request->address;
        $setting->content = $request->content;
        $setting->tags = $request->tags;
        $setting->title = $request->title;

        $setting->save();
        return redirect()->back();
    }
}
