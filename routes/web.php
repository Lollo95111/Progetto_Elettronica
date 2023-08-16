<?php

use App\Http\Controllers\myController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[myController::class,'welcome'])->name('home');
Route::get('store',[myController::class,'shopping'])->name('Shop');
Route::get('/categorie/{categoria}',[myController::class,'sceltaCategorie'])->name('categorie');
Route::get('/marche/{marca}',[myController::class,'sceltaMarca'])->name('marche');
