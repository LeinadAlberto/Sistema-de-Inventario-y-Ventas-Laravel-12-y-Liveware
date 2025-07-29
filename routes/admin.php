<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() { /* /admin */
    return view('admin.dashboard');
})->name('dashboard'); /* admin.dashboard */