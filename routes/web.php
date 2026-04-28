<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/names",[memberController::class,"index"])->name("Yzz.index");

Route::get('/names/create',[memberController::class,"create"])->name('Yzz.create');

Route::get("/names/{id}",[memberController::class,"show"])->name('Yzz.show');
