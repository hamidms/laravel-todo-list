<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    echo "halo";
});

Route::get('/todo', function () {
    return view('todo.app');
});