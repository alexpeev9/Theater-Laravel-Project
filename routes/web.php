<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TicketController;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/location',[LocationCrudController::class,'setupListOperation']);

// Route::get('/performances', function () {
//     return view('layouts/performance');
// });
Route::get('/performances',[PerformanceController::class,'getall']);
Route::get('performances/{id}', [PerformanceController::class,'getById']);

Route::get('/locations',[LocationController::class,'getall']);
Route::get('locations/{id}', [LocationController::class,'getById']);

Route::get('/tickets',[TicketController::class,'getall']);
Route::get('tickets/{id}', [TicketController::class,'getById']);
