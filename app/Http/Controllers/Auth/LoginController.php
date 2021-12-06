<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_index()
    {
        return view('auth.login');
    }

    public function register_index()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);
        $data = $request->all();
        $save = $this->create($data);

        return redirect('dashboard')->withSuccess('You have successfully login');
    }

    public function register(Request $request)
    {
        
    }
}
