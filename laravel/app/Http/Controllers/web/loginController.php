<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show()
    {
        return Inertia::render('Home');
    }public function login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt([
            'username'=>$request->username,
            'password'=>$request->password,
            'role'=>'admin']))
            {
                return redirect('/dashboard');
            }elseif(Auth::attempt([
                'username'=>$request->username,
                'password'=>$request->password,
                'role'=>'pengguna'
            ]))
            {
                return redirect('/dashboard');
            }else{
                return redirect('/');
            };
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
