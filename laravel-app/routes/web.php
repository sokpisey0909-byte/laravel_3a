<?php

use Illuminate\Support\Facades\Route;
//Web return view HTML

Route::get('/', function () {
    return view('welcome');
});
