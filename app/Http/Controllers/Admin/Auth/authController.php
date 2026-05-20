<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\loginRequest;
use App\Http\Requests\Admin\Auth\registerRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Repository\Admin\authRepo;

class authController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }


    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    public $redirectTo = '/admin/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    protected authRepo $authRepo;
    function __construct(authRepo $authRepo){
        $this->authRepo = $authRepo;
    }
    public function showLoginForm()
    {
        return view('admin-panel.auth.login');
    }

    public function register(registerRequest $request)
    {
        return $this->authRepo->register($request);

    }
      public function showRegisterForm()
    {
        return view('admin-panel.auth.register');
    }

    public function login(loginRequest $request)
    {
        return $this->authRepo->login($request);

    }
    public function logout(Request $request)
    {
       return $this->authRepo->logout($request);

    }

}
