<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/lougout', function () {
    Session::forget('user');
    return redirect('login');
});
route::post('login',[UserController::class,'login'])->name('login');
route::get('/',[ProductController::class,'index']);
route::get('/detail/{id}',[ProductController::class,'detail']);
route::get('/add_to_cart',[ProductController::class,'addToCart']);
