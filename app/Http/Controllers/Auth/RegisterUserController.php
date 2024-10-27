<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->status = 1;
        $user->start_date = $currentDate;
        $user->role_id = 2;
        $user->password = Hash::make($request->password);
        $user->save();
        
        event(new Registered($user));

        Auth::login($user);
        return response()->json([
            'status'=>'success',
            'message' => 'Đăng kí thành công !!',
        ]);
    }
}
