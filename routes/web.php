<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.pages.home');
})->name('home');

Route::get('/contact' , function(){
    return view('web.pages.contact');
})->name('contact');

Route::get('/shop' , function(){
     return view('web.pages.shop.index');
})->name('shop');


Route::get('/singel-product' , function(){
     return view('web.pages.shop.show');
})->name('show');
