<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\VarDumper\VarDumper;

class UserController extends Controller
{
    function login() {
        if( ! Auth::user()){
            return view('login-user');
        } else {
            return redirect('');
        }
    }
    function authenticate(Request $request) : RedirectResponse {
        $request->validate([
            'nik'     => ['required'],
            'password'  => ['required']
        ]);

        /** role validation */
        $user = User::where(['nik' => $request->nik])->first();
        if ($user->role != 0) {
            return redirect('login');
        }

        $credentials = array(
            'email'     => $user->email,
            'password'  => $request->password
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    function register() : View {
        return view('register');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('');
    }
}
