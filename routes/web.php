<?php

use App\Http\Controllers\Admin\Auth\authController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'admin.guest'], function () {
    Route::get('/', [authController::class, 'showLoginForm'])->name('login')->middleware('admin');
});
Route::post('/login', [AuthController::class, 'login'])->name('admin.login')->middleware('admin');

Route::get('/register', [authController::class, 'showRegisterForm'])->name('admin.register')->middleware('admin');
Route::post('/register', [authController::class, 'register'])->name('admin.register.post')->middleware('admin');    

Route::get("logout", [AuthController::class, "logout"])
    ->name('admin_logout')
    ->withoutMiddleware('admin.guest')
    ->middleware("auth:admin");
    Route::get('500', function () {
        abort(500); // This will trigger a 500 error
    })->name('Error-500');
    Route::get('404', function () {
        return view('errors.404'); // Create a Blade file at resources/views/errors/404.blade.php
    })->name('Error-404');
    Route::get('405', function () {
        return view('errors.405'); // Create a Blade file at resources/views/errors/405.blade.php
    })->name('Error-405');
    Route::get('403', function () {
        return view('errors.403'); // Create a Blade file at resources/views/errors/403.blade.php
    })->name('Error-403');

                /*Track-Order */


    Route::group(['middleware' => ['auth:admin','active']], function () {

          // add all routes here of admin
        include('admin/index.php');

         // add all routes here of company
       include('company/index.php');

    });
