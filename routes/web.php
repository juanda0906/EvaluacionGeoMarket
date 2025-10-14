<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;

Route::get('/orm', [OrmController::class, 'consulta']);
Route::get('/', function () {
    return view('welcome');
});
