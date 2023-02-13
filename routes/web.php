<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [KaryawanController::class, 'index'])->name('index');

Route::get('/add-karyawan', [KaryawanController::class, 'create'])->name('create');

Route::post('/show-karyawan', [KaryawanController:: class, 'store'])->name('store');

Route::get('/show-det-karyawan/{id}', [KaryawanController::class, 'show'])->name('show');

Route::get('/edit-karyawan/{id}', [KaryawanController::class, 'edit'])->name('edit');

Route::patch('/updateData/{id}', [KaryawanController::class, 'update'])->name('update');

Route::delete('/delete-karyawan/{id}', [KaryawanController::class, 'delete'])->name('delete');
