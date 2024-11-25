<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Cookie;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Providers\RouteServiceProvider;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Hash;

use Log;

class LoginController extends Controller
{


    public function login(LoginRequest $request)
    {
        Auth::guard('web')->logout();

        $request->session()->regenerateToken();

        $request->authenticate();

        $request->session()->regenerate();

        Log::info('Admin login '. $request->user()->role->name);
        if ($request->user()->role->name === 'admin') {
            Log::info('Admin login '. $request->user());
            toastr()->success('Đăng nhập thành công');
            return redirect()->route('admin.dashboard');
        }
        toastr()->success('Đăng nhập thành công');
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        toastr()->success('Đăng xuất thành công');
        return redirect()->route('user.dashboard');
    }
}
