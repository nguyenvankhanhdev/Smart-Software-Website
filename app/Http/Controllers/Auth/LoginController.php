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

use App\Http\Requests\LoginRequest;

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

        Log::info(Auth::user());

        if ($request->user()->nhomquyen->tennhomquyen === 'Admin') {

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
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            if (!$user) {
                $newUser = new User();
                $newUser->tentaikhoan = $google_user->getName();
                $newUser->email = $google_user->getEmail();
                $newUser->google_id = $google_user->getId();
                $newUser->trangthai = 1;
                $newUser->manhomquyen = 2;
                $newUser->save();
                Auth::login($newUser);
                toastr()->success('Đăng nhập thành công');
                return redirect()->intended(RouteServiceProvider::HOME);
            } else {
                toastr()->success('Đăng nhập thành công');
                Auth::login($user);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } catch (\Exception $e) {
            dd("Something wrong! " . $e->getMessage());
        }
    }

}
