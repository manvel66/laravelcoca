<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\ruanganController;



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
Route::resource('guru', guruController::class);
Route::resource('siswa', siswaController::class);
Route::resource('kelas', kelasController::class);
Route::resource('ruangan', ruanganController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
