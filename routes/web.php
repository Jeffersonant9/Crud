<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud;
Route::get('/', [Crud::class, 'Index']);
Route::post('/create', [Crud::class, 'Create']);

Route::post('/update', [Crud::class, 'Update']);
Route::post('/delete', [Crud::class, 'Delete']);

