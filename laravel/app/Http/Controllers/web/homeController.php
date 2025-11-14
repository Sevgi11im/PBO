<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
class homeController extends Controller
{
    public function dashboard(){
        return Inertia::render('Home');
    }
    public function artikel(){
        return Inertia::render('artikel');
    }
    public function berita(){
        return Inertia::render('berita');
    }
    public function kampanye(){
        return Inertia::render('kampanye');
    }
      public function registerPost(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'role'=>'required',
            'password'=>'required',
            'email'=>'required',
        ],[
            'name.required'=>'Nama Tidak Boleh Kosong',
            'username.required'=>'Nama Pengguna Tidak Boleh Kosong',
            'role.required'=>'Role Tidak Boleh Kosong',
            'password.required'=>'Password Tidak Boleh Kosong',
            'email.required'=>'Email Tidak Boleh Kosong',
        ]);
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'role'=>$request->role,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,

        ]);
        return back();
    }
}
