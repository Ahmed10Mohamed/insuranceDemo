<?php

    use App\Http\Controllers\Admin\settingController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\AboutSectionController;

    use App\Http\Controllers\Admin\Auth\profileController;
    use App\Http\Controllers\Admin\companyController;

    Route::group(["prefix" => "/Dashboard-Admin",'middleware' => ['redirectCompanyIfNotAdmin']],function (){
        /*Dashboard */
        Route::get('/' , DashboardController::class)->name('Admin-Dashboard');
      

            /*Company */
            Route::resource('Company',companyController::class);
              Route::get("change-Type-User",[companyController::class,"changeTypeUser"])->name('changeTypeUser');
            Route::get("/loginAsUser/{id}",[companyController::class,"loginAsUser"])->name('User-Login');

      

        Route::get('About-{position}',[AboutSectionController::class,'show']);
        Route::post('About-Section',[AboutSectionController::class,'update']);

        

        /*profile */
        Route::group(["prefix" => "Profile"],function (){
            Route::get("/",[profileController::class,"show"])->name('Profile');
            Route::post("/Update",[profileController::class,"update"])->name('Profile.Update');

            Route::get("/Password",[profileController::class,"password"])->name('Profile.Password');
            Route::post("/Update-Password",[profileController::class,"update_password"])->name('Profile.UpdatePassword');

        });

        


    });


