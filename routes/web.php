<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(\App\Http\Controllers\mainController::class)->group(function () {
    Route::post('post-file', 'postFile')->name('postFile');
});
