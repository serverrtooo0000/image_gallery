<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImageController;




Route::post('/upload', [ImageController::class, 'upload'])->name('upload');
Route::get('/create', [ImageController::class, 'create'])->name('create');





