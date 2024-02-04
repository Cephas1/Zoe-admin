<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagazinsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\UsersController;

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
    return redirect('/login');
});

Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    /*Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/
/*});

Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {*/

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /*Route::get('/flux', function () {
        return view('_flux');
    })->name('flux');*/

    Route::get('/magazins', [MagazinsController::class, 'index'])->name('magazins');
    //Route::get('/magazin', [MagazinsController::class, 'show'])->name('magazin.show');
    Route::post('/magazin', [MagazinsController::class, 'store'])->name('magazin.store');
    Route::delete('magazin/{id}', [MagazinsController::class, 'destroy'])->name('magazin.destroy');
    Route::post('magazin/{id}', [MagazinsController::class, 'edit'])->name('magazin.edit');

    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::delete('service/{id}', [ServicesController::class, 'destroy'])->name('service.destroy');
    Route::post('service/{id}', [ServicesController::class, 'edit'])->name('service.edit');

    Route::get('/suppliers', [SuppliersController::class, 'index'])->name('fournisseurs');
    Route::delete('supplier/{id}', [SuppliersController::class, 'destroy'])->name('supplier.destroy');
    Route::post('supplier/{id}', [SuppliersController::class, 'edit'])->name('supplier.edit');

    Route::get('/users', [UsersController::class, 'index'])->name('users');

});
