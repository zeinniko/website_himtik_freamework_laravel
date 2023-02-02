<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index(Request $req)
    {
        $data = Activity::where('title','like',"%$req->search%")->get();
        return view('berita',compact('data'));
    }

    public function add()
    {
        $data = Activity::where('title')->get();
        return view('berita-add',compact('data'));
    }

    public function add_proses(Request $req){
        $req->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:250',
            'date' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,webp',
        ]);

        $new = new Activity();
        $photo = $req->file('photo');
        $new_photo_name = uniqid() . "." . $photo->getClientOriginalExtension();
        $photo->move('images', $new_photo_name);
        $new->title = $req->title;
        $new->description = $req->description;
        $new->date = $req->date;
        $new->photo = $new_photo_name;
        $new->save();
        $req->session()->flash('msg', 'Proses Sukses');
        return redirect('berita-add');
    }

    public function del_proses(Request $req, $id)
    {
        $data = Activity::findOrFail($id);
        $data->delete();

        return redirect('berita');
    }
}
