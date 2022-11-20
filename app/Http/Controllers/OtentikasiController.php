<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtentikasiController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $data = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required']
            ]
        );

        if (Auth::attempt($data)) {
            //Berhasil Login
            $request->session()->regenerate();
            return redirect()->intended('supplier');
        } else {
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    public function formlogin()
    {
        return view('login.login');
    }
}
