<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BiodatamahasantriController;

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

Route::get( 
    '/mahasiswa', 
    [MahasiswaController::class, 'dataMahasiswa'] 
    );

Route::get('/', function () {
    return view('welcome');
});

//Url Salam
Route::get('/salam',function(){
    return "Assalamu'alaikum Selamat Pagi Dunia";
});

// Route dengan Redirect Page Views
Route::get('/kabar',function(){
    return view('latihan.kondisi');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/aboutus',[HomeController::class, 'aboutus']);

Route::get('/pegawai',[PegawaiController::class, 'index']);

Route::resource('pegawai', PegawaiController::class);

Route::get('/biodatamahasantri',[BiodatamahasantriController::class, 'index']);

Route::resource('biodatamahasantri', BiodatamahasantriController::class);

Route::get('/jurusan',[BiodatamahasantriController::class, 'jurusan']);