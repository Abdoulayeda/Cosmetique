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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show/{id}',[\App\Http\Controllers\HomeController::class, 'show'])->name('detail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('admin',[\App\Http\Controllers\Admin\AdminController::class, 'index']);

Route::resource('categorie',\App\Http\Controllers\Admin\CategorieController::class);
Route::resource('produit', \App\Http\Controllers\Admin\ProduitController::class);
