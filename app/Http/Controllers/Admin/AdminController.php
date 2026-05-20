<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\adminRequest;
use App\Repository\Admin\adminRepo;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Auth\passwordRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $adminRepo;

    public function __construct(adminRepo $adminRepo){
        $this->adminRepo = $adminRepo;

    }
    public function index()
    {
            if (admin()->id != 1 && !hasPermissionGroup(admin()->id, 'الموظفين')) {
                abort(401, 'Unauthorized.');
            }

      return $this->adminRepo->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'add_admin')) {
            abort(401, 'Unauthorized.');
        }

       return $this->adminRepo->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(adminRequest $request)
    {
       return $this->adminRepo->store($request);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
 
    public function edit(string $id,Request $request)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'edit_admin')) {
            abort(401, 'Unauthorized.');
        }
       return $this->adminRepo->edit($id,$request);
    }
 

    /**
     * Update the specified resource in storage.
     */
    public function update(adminRequest $request, string $id)
    {
       return $this->adminRepo->update($request,$id);
    }
   
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'delete_admin')) {
            abort(401, 'Unauthorized.');
        }
       return $this->adminRepo->destroy($id);
    }
  
}