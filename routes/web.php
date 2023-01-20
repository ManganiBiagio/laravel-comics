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
    return view('home');
})->name("HOME");

Route::get("/COMICS",function(){
    $data=[
        "comics"=>config("myConfig.tempDb")

    ];
    return view("comics",$data);
})->name("COMICS");
