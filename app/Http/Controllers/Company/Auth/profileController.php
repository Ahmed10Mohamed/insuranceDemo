<?php

namespace App\Http\Controllers\Company\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\passwordRequest;
use App\Http\Requests\Admin\Auth\profileRequest;
use App\Repository\Company\profileRepo;
use Illuminate\Http\Request;

class profileController extends Controller
{
    protected $profileRepo;
    function __construct(profileRepo $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }
    public function show(){
        return view('company-panel.pages.auth.profile');
    }
    public function update(profileRequest $request)
    {
        return $this->profileRepo->update($request);
    }
    public function password(){
        return view('company-panel.pages.auth.password');
    }
    public function update_password(passwordRequest $request)
    {
        return $this->profileRepo->changePassword($request);
    }
    public function wallet(){
        return $this->profileRepo->wallet();
    }
}
