<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Request as Input;

Route::get('/',[HomeController::class,'getAllPerformances']);
Route::get('/performances',[PerformanceController::class,'getall']);
// Route::get('/location',[LocationCrudController::class,'setupListOperation']);

// Route::get('/performances', function () {
//     return view('layouts/performance');
// });


Route::get('/extended-search',[PerformanceController::class,'searchByLocation']);
Route::get('/search-date',[PerformanceController::class,'searchByDate'])->name('search-date');
Route::get('/search-title',[PerformanceController::class,'searchByTitle'])->name('search-title');
Route::get('/performances',[PerformanceController::class,'getall']);
Route::get('performances/{id}', [PerformanceController::class,'getById']);

Route::get('/locations',[LocationController::class,'getall']);
Route::get('locations/{id}', [LocationController::class,'getById']);

Route::get('/tickets',[TicketController::class,'getall']);
Route::get('tickets/{id}', [TicketController::class,'getById']);
