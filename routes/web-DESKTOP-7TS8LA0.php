<?php
use App\Http\Controllers\ProductsController;
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
Route::resource('products', ProductsController::class);
Route::put('/edit/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('edit');
Route::get('/search', [App\Http\Controllers\ProductsController::class, 'search'])->name('search');

