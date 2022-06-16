<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente',[clienteController::class,'index']);
Route::get('/cliente/create',[clienteController::class,'create']);
Route::post('/cliente/store',[clienteController::class,'store']);

Route::get('/cliente/delete/{id}',[clienteController::class,'delete']);
Route::post('/cliente/update/{id}',[clienteController::class,'update']);