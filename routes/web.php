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
//Route::get('/products',[ProductsController::class,'index'])->name('products.index');
//Route::get('/products/create',[ProductsController::class,'create'])->name('products.create');
//Route::get('/products/store',[ProductsController::class,'store'])->name('products.store');
//Route::get('/employees/{employee}/edit',[EmployeeController::class,'edit'])->name('employees.edit');
//Route::put('/employees/{employee}',[EmployeeController::class,'update'])->name('employees.update');
//Route::delete('/employees/{employee}',[EmployeeController::class,'destroy'])->name('employees.destroy');