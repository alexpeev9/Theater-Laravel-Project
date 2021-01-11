<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Request as Input;

//Home Route
Route::get('/',[HomeController::class,'getAllPerformances']);

// Route Search By Date
Route::get('/search-date',[PerformanceController::class,'searchByDate'])->name('search-date');
// Route Search By Title
Route::get('/search-title',[PerformanceController::class,'searchByTitle'])->name('search-title');
// Route For Search Shows all Locations to prevent mulitple queries
Route::get('/extended-search',[PerformanceController::class,'searchByLocation']);

// All Performances
Route::get('/performances',[PerformanceController::class,'getall']);
// Current Performance
Route::get('performances/{id}', [PerformanceController::class,'getById']);

// All Locations
Route::get('/locations',[LocationController::class,'getall']);
// Current Location
Route::get('locations/{id}', [LocationController::class,'getById']);

/// All Tickets
Route::get('/tickets',[TicketController::class,'getall']);
// Current Ticket
Route::get('tickets/{id}', [TicketController::class,'getById']);
