<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteSe
rviceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'siswa', 'middleware' => ['isSiswa','auth']], function () {
    Route::get('dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');    
}); 



Route::group(['prefix' => 'guru', 'middleware' =>[ 'isGuru','auth']], function () {
    Route::get('/', [GuruController::class, 'index'])->name('guru.dashboard');
    Route::get('/create', [GuruController::class, 'create']);
    Route::post('/store', [GuruController::class, 'store']);
    Route::get('/show/{id}', [GuruController::class, 'show']);
    Route::post('/update/{id}', [GuruController::class, 'update']);
     Route::get('/destroy/{id}', [GuruController::class, 'destroy']);
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
