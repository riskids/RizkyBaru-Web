<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\transaksi_galonController;

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


Route::post('/admin/galon/filter', [transaksi_galonController::class, 'index']);
Route::get('/admin/galon', [transaksi_galonController::class, 'index']);
Route::post('/admin/galon', [transaksi_galonController::class, 'store']);
Route::put('/admin/galon/{id}', [transaksi_galonController::class, 'update']);
// Route::put('/admin/galon/update/{id}','transaksi_galonController@update');
// Route::put('/admin/galon', 'transaksi_galonController@update')->name('galon.update');