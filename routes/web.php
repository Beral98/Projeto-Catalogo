<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'showlogin'])->name('showlogin');
Route::get('/login', [AuthController::class, 'showlogin'])->name('showlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/adminlogin', function () {
    return view('admin_login');
});

Route::get('/userlogin', function () {
    return view('user_login');
});


Route::get('/catalog', [CatalogController::class, 'index'])->name('index');
Route::get('/catalog/create', [CatalogController::class, 'create'])->name('create');
Route::post('/catalog', [CatalogController::class, 'store']);
Route::get('/catalog/{id}/edit', [CatalogController::class, 'edit'])->name('edit');
Route::put('/catalog/{id}', [CatalogController::class, 'update']);
Route::delete('/catalog/{id}', [CatalogController::class, 'destroy']);

Route::post('/login', [AuthController::class, 'login'])->name('login');

