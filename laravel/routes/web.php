<?php

use App\Http\Controllers\web\adminController;
use App\Http\Controllers\web\homeController;
use App\Http\Controllers\web\loginController;
use Illuminate\Auth\Events\Login;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [loginController::class,'show']);
Route::post('/login', [loginController::class,'login']);
Route::get('/logout', [loginController::class,'logout']);
Route::post('/register', [homeController::class,'registerPost']);

Route::get('/artikel', [homeController::class,'artikel']);
Route::get('/berita', [homeController::class,'berita']);
Route::get('/kampanye', [homeController::class,'kampanye']);

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/tulis-berita',[adminController::class,'tulisBerita']);
});
Route::middleware(['auth','role:petugas'])->group(function(){

});
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [homeController::class,'dashboard']);

});
