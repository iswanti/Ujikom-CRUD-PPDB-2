<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('/students/store', [App\Http\Controllers\StudentController::class, 'store']);
Route::get('/students/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit']);
Route::put('/students/update/{id}', [App\Http\Controllers\StudentController::class, 'update']);
Route::get('/students/delete/{id}', [App\Http\Controllers\StudentController::class, 'delete']);

Route::get('/exportpdf/{id}', [App\Http\Controllers\StudentController::class, 'export'])->name('exportpdf');


Route::get('/cetak', [App\Http\Controllers\StudentController::class, 'cetak'])->name('cetak');
