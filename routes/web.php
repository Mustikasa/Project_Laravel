<?php

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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/About', function () {
    return view('About',[
        "title" => "About",
        "name" => "Mustika",
        "class" =>"XII RPL 1",
        "image =>mustika.jpeg"

    ]);
});

Route::get('/Blog', function () {
    return view('Blog', [
        "title" =>"Blog"
    ]);
});

Route::get('/4', function () {
    return view('empat', [
        "title" => "empat"
    ]);
});
