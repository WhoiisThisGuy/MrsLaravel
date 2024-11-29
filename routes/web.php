<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.mrslaravel-index');
});

Route::prefix('projects/applyexe')->group(function () {
    Route::get('/', function () {
        return view('projects.applyexe.view.apply-intro');
    });
});
