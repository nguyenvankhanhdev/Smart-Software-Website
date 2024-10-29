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
    // public function login() {
    //     return view('auth.login');
    // }

    // public function getGoogleSignInUrl()
    // {
    //    return Socialite::driver('google')->redirect();
    // }
    // public function loginCallback()
    // {

    //     try {
    //         $user = Socialite::driver('google')->user();
    //         $finduser = User::where('google_id', $user->id)->first();
    //         if($finduser)
    //         {
    //             Auth::login($finduser);
    //             Session::put('name', $finduser->name);
    //             return view ('index');
    //         }
    //         else
    //         {
    //             $newUser = User::create([
    //                 'name' => $user->name,
    //                 'email' => $user->email,
    //                 'google_id'=> $user->id,
    //                 'nhomquyen_id'=>'1',
    //                 'status'=>'Hoạt động',
    //                 'password' => encrypt('123456dummy')
    //             ]);
    //             Auth::login($newUser);
    //             Session::put('name', $newUser->name);
    //             return  view('index');
    //         }

    //     } catch (Exception $e){
    //         dd($e->getMessage());
    //     }

    // }

    public function login(LoginRequest $request)
    {
        Auth::guard('web')->logout();

        $request->session()->regenerateToken();

        $request->authenticate();

        $request->session()->regenerate();

        if($request->user()->role_id === '1') {
            return redirect()->route('admin.dashboard')->with('success', 'Đăng nhập thành công');
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('/');
    }
}
