<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\HomeController;
use Kavist\RajaOngkir\Facades\RajaOngkir;

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('welcome');
});



Route::get('/index', [CheckController::class, 'index']);
Route::get('/cities/{id}', [CheckController::class, 'getCities']);

Auth::routes([
    'register' => false,
    'reset' => false,
    ]);
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
