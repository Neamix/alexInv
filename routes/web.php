<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'home']);
Route::get('/about',[PageController::class,'about']);
Route::get('/contact', [PageController::class, 'contact'])->name('contact.show');
Route::post('/contact', [PageController::class, 'submitForm'])->name('contact.submit');
Route::get('/service', [PageController::class, 'service']);
Route::get('/callus', [PageController::class, 'callus']);