<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pastelescontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('pasteles', [Pastelescontroller::class, 'index']);
Route::get('pasteles/create', [Pastelescontroller::class, 'create']);
Route::get('pasteles/{id}/destroy', [Pastelescontroller::class, 'destroy']);