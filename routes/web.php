<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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
    return view('index');
});

Route::get('/categories', [CategoriesController::class, 'tampil']);
Route::get('/categories/tambah', [CategoriesController::class, 'tambah']);
Route::post('/categories/upload', [CategoriesController::class, 'upload']);
Route::get('/categories/edit/{id_categories}', [CategoriesController::class, 'edit']);
Route::put('/categories/update/{id_categories}', [CategoriesController::class, 'update']);
Route::get('/categories/hapus/{id_categories}', [CategoriesController::class, 'hapus']);
Route::get('/categories/delete/{id_categories}', [CategoriesController::class, 'delete']);
Route::get('/categories/noDelete', [CategoriesController::class, 'noDelete']);




Route::get('transaction', function () {
    return view('/transaction/transaction');
});

Route::get('transaction-entry', function () {
    return view('/transaction/transaction-entry');
});
Route::get('transaction-edit', function () {
    return view('/transaction/transaction-edit');
});
Route::get('transaction-hapus', function () {
    return view('/transaction/transaction-hapus');
});
