<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::controller(MahasiswaController::class)
    ->prefix('mahasiswa')
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/update', 'update');
        Route::get('/delete', 'delete');
    });