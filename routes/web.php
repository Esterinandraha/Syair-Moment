<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/Wedding', function (){
    return view('Wedding');
});

Route::get('/Acara', function (){
    return view('Acara');
});

Route::get('/Fashion', function (){
    return view('Fashion');
});

Route::get('/Editorial', function (){
    return view('Editorial');
});

Route::get('/Diskon', function (){
    return view('Diskon');
});


