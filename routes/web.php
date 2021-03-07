<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*rutas home*/
Route::get('/', HomeController::class);

/*rutas admin*/
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/create', [AdminController::class, 'create']);
