<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('add',[CustomerController::class,'add_customer']);

Route::get('show/{$id}',[CustomerController::class,'']);
