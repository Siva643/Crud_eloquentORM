<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[DetailController::class,'index']);
Route::post('store',[DetailController::class,'store'])->name('store');
Route::get('/read',[DetailController::class,'read']);
Route::get('edit/{id}',[DetailController::class,'edit']);
Route::post('update/{id}',[DetailController::class,'update']);
Route::get('delete/{id}',[DetailController::class,'destroy']);
Route::get('search',[DetailController::class,'search']);






