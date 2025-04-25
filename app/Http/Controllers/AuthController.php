<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && $request->password&& $admin->password) {
            session(['admin_id' => $admin->id]);
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        return back()->withErrors(['login' => 'Invalid username or password']);
    }

    public function logout()
    {
        session()->forget('admin_id');
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
