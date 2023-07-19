<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        if (!$user || $user->role != 0 || !Hash::check($request->password, $user->password)) {
            return redirect(route('user.login'));
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended('');
    }

    function register() {
        if( ! Auth::user()){
            return view('register');
        } else {
            return redirect('');
        }
    }

    function storeUser(Request $request) {
        $request->validate([
            'phone_number'      => ['required'],
            'nik'               => ['required', 'integer'],
            'name'              => ['required'],
            'password'          => ['required'],
            'confirm_password'  => ['required']
        ]);

        if ($request->password != $request->confirm_password) {
            return redirect(route('register'));
        }

        User::create([
            'name'          => $request->name,
            'phone_number'  => $request->phone_number,
            'nik'           => $request->nik,
            'password'      => Hash::make($request->password),
            'role'          => 0
        ]);

        return redirect(route('user.login'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('');
    }
}
