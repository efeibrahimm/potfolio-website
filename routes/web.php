<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/blog/{id}/{slug}', [HomeController::class,'blogDetail']);
Route::get('/portfolio/{id}/{slug}', [HomeController::class,'portfolioDetail']);
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/new-admin',[LoginController::class,'newAdmin']);

Route::prefix('/admin')->middleware('isLogin')->group(function () {
    Route::get('/login', function(){
        return view('dashboard.login');
    })->name('login');
    
    Route::post('/login',[LoginController::class,'login']);
});


Route::prefix('/admin')->middleware('authLogin')->group(function(){

    Route::get('/',[MainController::class,'index1']);

    Route::get('/general-setting',[GeneralSettingController::class,'index']);
    Route::post('/general-setting',[GeneralSettingController::class,'store']);
    
    Route::get('/slider',[SliderController::class,'index']);
    Route::post('/slider',[SliderController::class,'store']);
    
    Route::get('/services',[ServicesController::class,'index']);
    Route::get('/services-add/{id?}',[ServicesController::class,'add']);
    Route::get('/services-del/{id?}',[ServicesController::class,'delete']);
    Route::post('/services',[ServicesController::class,'store']);

    Route::get('/experience',[ExperienceController::class,'index']);
    Route::get('/experience-add/{id?}',[ExperienceController::class,'add']);
    Route::get('/experience-del/{id?}',[ExperienceController::class,'delete']);
    Route::post('/experience',[ExperienceController::class,'store']);

    Route::get('/portfolio',[PortfolioController::class,'index']);
    Route::get('/portfolio-add/{id?}',[PortfolioController::class,'add']);
    Route::get('/portfolio-del/{id?}',[PortfolioController::class,'delete']);
    Route::post('/portfolio',[PortfolioController::class,'store']);
  
    Route::get('/blog',[BlogController::class,'index']);
    Route::get('/blog-add/{id?}',[BlogController::class,'add']);
    Route::get('/blog-del/{id?}',[BlogController::class,'delete']);
    Route::post('/blog',[BlogController::class,'store']);
    
    
    
    Route::get('/main',[MainController::class,'index']);
    Route::post('/main',[MainController::class,'store']);
});