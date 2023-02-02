<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\NoLogin; 
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



Route::get('/',[HomeController::class,'index']);
Route::get('visi-misi',[HomeController::class,'visi']);
Route::get('berita-acara',[HomeController::class,'berita']);


Route::get('login',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'proses_login']);
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'proses_register']);


Route::middleware(['auth'])->group(function(){
Route::get('logout',[AuthController::class,'logout']);

Route::get('berita',[BeritaController::class,'index']);
Route::get('berita-add',[BeritaController::class,'add']);
Route::post('berita-add',[BeritaController::class,'add_proses']);
Route::get('berita-delete/{id}',[BeritaController::class,'del_proses'])->name('delbrt');


Route::get('profil',[AuthController::class,'profil']);
Route::post('profile',[AuthController::class,'profile_proses']);
});