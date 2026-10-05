<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'index']);
Route::get('/shop',[FrontendController::class,'shop']);
Route::get('/return-process',[FrontendController::class,'returnProcess']);
