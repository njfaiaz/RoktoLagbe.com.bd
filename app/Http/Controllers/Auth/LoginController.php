<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (Auth()->user()->role == 'admin') {
            return route('admin.dashboard');
        } elseif (Auth()->user()->role == 'user') {
            return route('user.dashboard');
        }
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
