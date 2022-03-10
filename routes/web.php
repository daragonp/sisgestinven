<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\HomeController;

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

Route::get('/', [HomeController::class, 'contador']);

Route::get('/dashboard', [HomeController::class, 'index']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

Route::get('/user', [HomeController::class, 'listar_usuarios']);

Route::get('/eliminar-usuario/{id}', [HomeController::class, 'delete']);

Route::get('/actualizar-usuario/{id}', [HomeController::class, 'update_user']);

Route::post('/actualizarusuario/{id}', [HomeController::class, 'edit']);

//Rutas para el módulo de categoría:
Route::get('categoria/category', [CategoryController::class, 'show']);
Route::get('categoria/newcategory', [CategoryController::class, 'create']);
Route::post('categoria/addcategory', [CategoryController::class, 'store']);
Route::get('categoria/update-category/{id}', [CategoryController::class, 'update']);
Route::post('categoria/updatecategory/{id}', [CategoryController::class, 'edit']);
Route::get('categoria/delete-category/{id}', [CategoryController::class, 'destroy']);

//Rutas para el módulo de productos:
Route::get('producto/products', [ProductController::class, 'index']);
Route::get('producto/newproduct', [ProductController::class, 'create']);
Route::post('producto/addproduct', [ProductController::class, 'store']);
Route::get('producto/update-product/{id}', [ProductController::class, 'update']);
Route::post('producto/updateproduct/{id}', [ProductController::class, 'edit']);
Route::get('producto/delete-product/{id}', [ProductController::class, 'destroy']);

//Rutas para el módulo de proveedors:
Route::get('proveedor/suppliers', [SupplierController::class, 'index']);
Route::get('proveedor/newsupplier', [SupplierController::class, 'create']);
Route::post('proveedor/addsupplier', [SupplierController::class, 'store']);
Route::get('proveedor/update-supplier/{id}', [SupplierController::class, 'update']);
Route::post('proveedor/updatesupplier/{id}', [SupplierController::class, 'edit']);
Route::get('proveedor/delete-supplier/{id}', [SupplierController::class, 'destroy']);

require __DIR__.'/auth.php';
