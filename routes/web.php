<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use Monolog\Processor\WebProcessor;
use App\Http\Controllers\ProdutoController;

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



Route::post('/catalogo', [WebController::class, 'catalogo'])->name('catalogo');

Route::get('/create', [WebController::class, 'create'])->name('create');

Route::get('/produto/{id}/delete', [WebController::class, 'destroy'])->name('product.delete');

Route::get("/produto/{id}/edit",[WebController::class,"edit"])->name("product.edit");

Route::put("/produto/{id}",[WebController::class,"update"])->name("product.update");

