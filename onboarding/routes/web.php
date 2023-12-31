<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', App\Livewire\Main::class);
Route::get('/bussines-name', \App\Livewire\BussinesName::class);
Route::get('/services', \App\Livewire\Services::class);
Route::get('/bussines-area', App\Livewire\BussinesArea::class);
