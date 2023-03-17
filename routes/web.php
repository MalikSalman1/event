<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salman;
use App\Http\Controllers\secondcontroller;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\RegisterUserPage;

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


// make a group route of login
route::group(['middleware'=>['login']],function(){
   
    route::get('/logout',[MainController::class,'logout']);
    
});
route::get('/login',[MainController::class,'login']);
route::post('/login',[MainController::class,'login_post']);
route::get('/',[DashboardController::class,'index']);
route::get('/house_owner',[RegisterUserPage::class,'index']);
route::get('/tenant',[RegisterUserPage::class,'tenant']);
route::post('/register_owner',[RegisterUserPage::class,'register_owner']);
route::post('/register_tenant',[RegisterUserPage::class,'register_tenant']);
