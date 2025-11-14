<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class adminController extends Controller
{
    public function tulisBerita(){
        return Inertia::render('formBerita');
    }
}
