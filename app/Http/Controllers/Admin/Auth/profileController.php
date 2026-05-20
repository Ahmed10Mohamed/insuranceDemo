<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\passwordRequest;
use App\Http\Requests\Admin\Auth\profileRequest;
use App\Repository\Admin\profileRepo;
use Illuminate\Http\Request;

class profileController extends Controller
{
    protected $profileRepo;
    function __construct(profileRepo $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }
    public function show(){
        return view('admin-panel.pages.auth.profile');
    }
    public function update(profileRequest $request)
    {
        return $this->profileRepo->update($request);
    }
    public function password(){
        return view('admin-panel.pages.auth.password');
    }
    public function update_password(passwordRequest $request)
    {
        return $this->profileRepo->changePassword($request);
    }
}
