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
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('zoe-admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/reservations', function () {
        return view('zoe-admin.reservations');
    })->name('admin.reservations');

    Route::get('/depenses', function () {
        return view('zoe-admin.depenses');
    })->name('admin.depenses');

    Route::get('/agences', function () {
        return view('zoe-admin.agences');
    })->name('admin.agences');

    Route::get('/finances', function () {
        return view('zoe-admin.finances');
    })->name('admin.finances');

    Route::get('/reporting', function () {
        return view('zoe-admin.reporting');
    })->name('admin.reporting');

    Route::get('/utilisateurs', function () {
        return view('zoe-admin.utilisateurs');
    })->name('admin.utilisateurs');

});
