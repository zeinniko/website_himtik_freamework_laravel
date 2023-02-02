<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('login');
    }
    public function proses_login (Request $req){
        $req->validate([
            "email" => "required|min:6|max:50|email|exists:users,email",
            "password" => "required|min:5|max:20"
        ]);

        $user = User::where('email',$req->email)->first();

        if (Hash::check($req->password,$user->password)){

            Auth::attempt(['email' => $req->email, 'password' => $req->password]);
            return redirect('/');
            
        } else {
            return redirect()->back()->withErrors(['password'=>'Password Salah']);
        }

        
    }
    

    public function register (){
        return view('register');
    }
    public function proses_register (Request $r){
        
        $r ->validate ([
            "name" => "required|min:4|max:30",
            "email" => "required|min:3|max:50|email|unique:users,email",
            "password" => "required|confirmed|min:6",
        ]);

        $new = new User();
        $new->name = $r->name;
        $new->email = $r->email;
        $new->password = Hash::make($r->password);
        $new->save();
        
        $r->session()->flash('message','Registration Successful.');
        return redirect('register');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }


    public function profil(){
        return view('profile');
    }

    public function profile_proses( Request $r){
        $iduser = Auth::user()->id;
        $r ->validate ([
            "name" => "required|min:3|max:30",
            "email" => "required|min:5|max:50|email|unique:users,email,$iduser",
            "password" => "nullable|confirmed|min:6",
            "old_password" => "nullable|confirmed|min:6",
        ]);

        $new =  User::findOrFail($iduser);
        $new->name = $r->name;
        $new->email = $r->email;
        if($r ->password){
            if(hash::check($r->old_password,$new->password)){
                $new->password = hash::make($r->password);
            }else{
                return redirect('profil')->withErrors(['password'=>'old password is wrong']);
            }
        }
        
        $new->save();
        
        $r->session()->flash('message','Registration Successful.');
        return redirect('profil');
    }
}

