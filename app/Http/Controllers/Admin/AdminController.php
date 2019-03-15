<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function showLoginForm()
    {

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $array = $request->all();
        if(Auth::attempt([
            'email' => $array['email'],
            'password' => $array['password'],

        ]))
        {
            if(Auth::guard()->user()->roll == 'admin'){
//                return redirect('admin/dashboard');
                return redirect('admin/dashboard');
            }

        }
        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors(['email'=> 'Invalid username or password']);
    }

    public function show()
    {

        return view('dashboard');
    }


    public function logout()
    {
        Auth::guard()->logout();
        return redirect('/');
    }

}
