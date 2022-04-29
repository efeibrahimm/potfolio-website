<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        //Log::info($request->post());
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('/admin');
        }
        return redirect('/admin/login')->withErrors('Email veya şifre hatalı !');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function newAdmin(){
        $user = new User();

        $user->name = "Admin";
        $user->email = "admin@canholat.com";
        $user->password = bcrypt("canholat");

        $user->save();
    }
}
