<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\companyRequest;
use App\Repository\Admin\companyRepo;
use Illuminate\Http\Request;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $companyRepo;
    function __construct(companyRepo $companyRepo){
        $this->companyRepo = $companyRepo;
    }
    public function index()
    {
          if (admin()->id != 1 && !hasPermissionGroup(admin()->id, 'الشركات')) {
            abort(401, 'Unauthorized.');
        }
        return $this->companyRepo->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'add_company')) {
            abort(401, 'Unauthorized.');
        }
        return $this->companyRepo->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(companyRequest $request)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'add_company')) {
            abort(401, 'Unauthorized.');
        }
        return $this->companyRepo->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->companyRepo->index();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'edit_company')) {
            abort(401, 'Unauthorized.');
        }   
        return $this->companyRepo->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(companyRequest $request, string $id)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'edit_company')) {
            abort(401, 'Unauthorized.');
        }
        return $this->companyRepo->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'delete_company')) {
            abort(401, 'Unauthorized.');
        }

        return $this->companyRepo->destroy($id);
    }
    public function getSizesByType(Request $request){
        return $this->companyRepo->getSizesByType($request);
    }
    public function changeTypeUser(Request $request){
        return $this->companyRepo->changeTypeUser($request);
    }
    public function loginAsUser(string $id)
    {

        return $this->companyRepo->loginAsUser($id);
    }
}
