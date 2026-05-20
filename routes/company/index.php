<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Company\DashboardController;
    use App\Http\Controllers\Company\Auth\profileController;

    Route::group(["prefix" => "/Company-Admin", 'middleware' => ['redirectIfNotCompany']],function (){
        /*Dashboard */
        Route::get('/' , DashboardController::class)->name('Company-Dashboard');
        /*Driver */
           /*profile */
           Route::group(["prefix" => "Profile"],function (){
            Route::get("/",[profileController::class,"show"])->name('Company-Profile');
            Route::post("/Update",[profileController::class,"update"])->name('Company-Profile.Update');

            Route::get("/Password",[profileController::class,"password"])->name('Company-Profile.Password');
            Route::post("/Update-Password",[profileController::class,"update_password"])->name('Company-Profile.UpdatePassword');

        });

    });