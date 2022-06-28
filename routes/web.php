<?php

use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;

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
    return view('login', ['title'=>'Login']);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::resource('registers', RegisterController::class);

Route::get('/admin', [HomeController::class, 'adminHome']);
Route::get('/kasir', [HomeController::class, 'kasirHome']);
Route::get('/manajer', [HomeController::class, 'manajerHome']);

Route::get('/list', [ListController::class, 'index']);
Route::get('/delete/{id}', [ListController::class, 'delete']);

Route::get('/createmenu', [MenuController::class, 'create']);
Route::get('/listmenu', [MenuController::class, 'index']);
Route::get('/menudelete/{id}', [MenuController::class, 'delete']);
Route::resource('menus', MenuController::class);

Route::get('/createtran', [TransaksiController::class, 'create']);
Route::get('/bon', [TransaksiController::class, 'bon']);
Route::get('/kasirtran', [TransaksiController::class, 'store']);
Route::get('/laporandelete/{id}', [TransaksiController::class, 'delete']);
Route::resource('kasirs', TransaksiController::class);
Route::resource('prints', PrintController::class);