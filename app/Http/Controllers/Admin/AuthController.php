<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function ShowLogin() {
        return view('admin.login');
    }

    public function ProcessLogin(Request $request) {
        $rules = [
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->validated()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                \Log::info('Login successful');
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->route('login');
            }
        }
    }

    public function Logout(Request $request) {
        if (Auth::check()) {
            $userId = auth()->user()->id;
            \Log::info('user id ' . $userId . ' already logged in');
        } else {
            return redirect()->route('login');
        }
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        \Log::info('Logout Successfully');
        return redirect()->route('login');
    }
}
