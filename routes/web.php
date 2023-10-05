<?php

use App\Models\GudangBarang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangBarangController;

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
Route::get('/gudangbarang', [GudangBarangController::class, 'index']);
Route::get('/gudangbarang/show/{id}', [GudangBarangController::class, 'show'])-> name('gudangbarang.show');