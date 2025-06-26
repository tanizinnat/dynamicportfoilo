<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/education', 'education');
Route::view('/skills', 'skills');
Route::view('/contact', 'contact');

