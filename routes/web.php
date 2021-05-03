<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Uploads;
use App\Http\Livewire\Images;

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

Route::get('/uploads', Uploads::class);
Route::get('/images', Images::class);
