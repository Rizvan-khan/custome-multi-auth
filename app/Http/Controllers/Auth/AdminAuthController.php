<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
     public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    //  public function showRegisterForm()
    // {
    //     return view('admin.auth.register');
    // }

    //   public function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:admins',
    //         'password' => 'required|min:6',
    //     ]);

    //     $admin = Admin::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     // Auth::guard('admin')->login($admin);

    //     return redirect()->route('admin.auth.login');
    // }

  public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login');
    }

}
