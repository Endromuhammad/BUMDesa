<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\VarDumper\VarDumper;

class adminController extends Controller
{
    function login() : View {
        return view('login');
    }

    function authenticate(Request $request) : RedirectResponse {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);

        /** role validation */
        $user = User::where(['email' => $request->email])->first();
        if ($user->role != 1) {
            return redirect('login');
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('login');
    }

    function dashboard() : View {
        $page = "dashboard";
        return view('admin.contents.dashboard', ['page' => $page]);
    }

    function layananKeuangan() : View {
        
    }

    function layananPeminjaman() : View {
        $page = "layanan-peminjaman";
        return view('admin.contents.layanan-peminjaman', ['page' => $page]);
    }
}
