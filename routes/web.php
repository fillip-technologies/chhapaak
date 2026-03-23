<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/demo-one', function () {
    return view('demo-one');
});

Route::get('/demo-two', function () {
    return view('demo-two');
});

Route::get('/demo-three', function () {
    return view('demo-three');
});

Route::get('/demo-four', function () {
    return view('demo-four');
});

Route::get('/demo-five', function () {
    return view('demo-five');
});

Route::get('/demo-six', function () {
    return view('demo-six');
});

Route::get('/demo-seven', function () {
    return view('demo-seven');
});

Route::get('/demo-eight', function () {
    return view('demo-eight');
});
