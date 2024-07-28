<?php

use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');


        Route::prefix('Suppliers')
            ->as('suppliers.')
            ->group(function () {
                Route::get('/',                  [SupplierController::class, 'index'])->name('index');
                Route::get('/create',            [SupplierController::class, 'create'])->name('create');
                Route::post('/store',            [SupplierController::class, 'store'])->name('store');
                Route::get('/show/{id}',         [SupplierController::class, 'show'])->name('show');
                Route::get('{id}/edit',          [SupplierController::class, 'edit'])->name('edit');
                Route::put('{id}/update',        [SupplierController::class, 'update'])->name('update');
                Route::delete('{id}/destroy',    [SupplierController::class, 'destroy'])->name('destroy');
            });
    });
