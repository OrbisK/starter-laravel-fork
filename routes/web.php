<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
})->name('index');

Route::get('/test', function () {
  return "Helo World!";
})->name('test');
