<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChuckNorisController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/joke',[ChuckNorisController::class,'find']);
