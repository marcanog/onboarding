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
Route::get('/business-name', App\Livewire\BusinessName::class);
Route::get('/services', App\Livewire\Services::class);
Route::get('/business-area', App\Livewire\BusinessArea::class);
Route::get('/how-contactus', App\Livewire\HowContacts::class);
