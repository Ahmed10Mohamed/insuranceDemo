<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Admin\aboutSectionRepo;
use App\Validators\CompanyValidators;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    private aboutSectionRepo $aboutSectionRepo;
    public function __construct(aboutSectionRepo $aboutSectionRepo){
        $this->aboutSectionRepo = $aboutSectionRepo;
    }

 
    /**
     * Show the form for editing the specified resource.
     */
    public function show($position)
    {
          if (admin()->id != 1 && !hasPermissionGroup(admin()->id, 'عن السيستم')) {
            abort(401, 'Unauthorized.');
        }
        return $this->aboutSectionRepo->show($position);

    }
 


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
          if (admin()->id != 1 && !hasPermissionGroup(admin()->id, 'عن السيستم')) {
            abort(401, 'Unauthorized.');
        }
        return $this->aboutSectionRepo->update($request);

    }

   

}
