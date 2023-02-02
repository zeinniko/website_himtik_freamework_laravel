<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (Request $req){
        $data = Activity::Limit(4)->InRandomOrder()->get();
        return view('home', compact('data'));
    }

    public function visi (){
        return view('visimisi');
    }

    public function berita (Request $req){
        $data = Activity::where('title','like',"%$req->search%")->get();
        return view('berita-acara', compact('data'));
    }
}
