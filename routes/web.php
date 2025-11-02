<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('joljochna_landing2');
});

Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::get('/slider1',function(){
    return view('slider1');
});

Route::get('/slider2',function(){
    return view('slider2');
});
