<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name("sabina.home");

Route::get('/collection', function(){
    return view('collection');
})->name("sabina.collections");

Route::get('/login', function(){
    return view('login');
})->name("sabina.login");

Route::get('/register', function(){
    return view('register');
})->name("sabina.register");

Route::get('/cart', function(){
    return view('cart');
})->name("sabina.carts");

Route::get('/checkout', function(){
    return view('checkout');
})->name("sabina.checkout");

Route::get('/details', function(){
    return view('details');
})->name("sabina.details");

Route::get('/products', function(){
    return view('products');
})->name("sabina.products");
