<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\clientRequest;
use App\Repository\Admin\clientRepo;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $repo;
    function __construct(clientRepo $repo){
        $this->repo = $repo;
    }
    public function index()
    {
          if (admin()->id != 1 && !hasPermissionGroup(admin()->id, 'العملاء')) {
            abort(401, 'Unauthorized.');
        }
        return $this->repo->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'add_client')) {
            abort(401, 'Unauthorized.');
        }
        return $this->repo->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(clientRequest $request)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'add_client')) {
            abort(401, 'Unauthorized.');
        }
        return $this->repo->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->repo->index();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'edit_client')) {
            abort(401, 'Unauthorized.');
        }   
        return $this->repo->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(clientRequest $request, string $id)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'edit_client')) {
            abort(401, 'Unauthorized.');
        }
        return $this->repo->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (admin()->id != 1 && !hasPermission(admin()->id, 'delete_client')) {
            abort(401, 'Unauthorized.');
        }

        return $this->repo->destroy($id);
    }
 
    public function changeTypeClient(Request $request){
        return $this->repo->changeTypeUser($request);
    }
  
}
