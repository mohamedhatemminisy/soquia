<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }


    public function postLogin(AdminLoginRequest $request)
    {

        //validation
        //check , store , update

        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' =>  $request->input("email"), 'password' =>  $request->input("password")])) {

            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => trans('admin.wrong_data')]);
    }

    public function logout()
    {
        Auth::logout();
    
        return redirect()->route('admin.login');
    }

    private function getGaurd()
    {
        return auth()->user();
    }
}
