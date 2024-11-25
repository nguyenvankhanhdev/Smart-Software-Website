<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\TourTypes;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(RegisterRequest $request)
    {
        $request->validated();
        $user = new User();
        $user->tentaikhoan = $request->tentaikhoan;
        $user->email = $request->email;
        $user->trangthai = 1;
        $user->manhomquyen = 2;
        $user->password = Hash::make($request->password);
        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return response()->json([
            'status' => 'success',
            'message' => 'Đăng kí thành công !!',
        ]);
    }
}
