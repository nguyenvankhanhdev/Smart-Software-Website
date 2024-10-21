<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        $formatUser = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'full_name' => $user->full_name,
                'username' => $user->username,
                'password' => $user->password,
                'start_date' => $user->start_date,
                'role_id' => $user->roles,
                'email' => $user->email,
            ];
        });
        return response()->json([
            'message' => 'success',
            'data' => $formatUser,
            'status' => true
        ], 200);
    }

    public function store(Request $request)
    {

        if ($request->has('users')) {
            $userData = $request->users;
        } elseif ($request->isJson() && array_keys($request->json()->all()) === range(0, count($request->json()->all()) - 1)) {
            $userData = $request->all();
        } else {
            $userData = [$request->all()];
        }

        foreach ($userData as $user) {
            $validator = Validator::make($user, [
                'full_name' => 'required|string|max:255',
                'username' => 'required|string',
                'password' => 'required|string',
                'start_date' => 'required|date',
                'role_id' => 'required|integer',
                'email' => 'required|email',
            ], [
                'full_name.required' => 'Please enter a full name for user.',
                'username.required' => 'Please enter username.',
                'password.required' => 'Please enter password.',
                'start_date.required' => 'Please specify the start date for user.',
                'role_id.required' => 'Please specify the role id for user.',
                'email.required' => 'Please specify the email for user.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Lỗi xác thực',
                    'errors' => $validator->errors(),
                    'status' => false
                ], 403);
            }
        }

        DB::beginTransaction();
        try {
            $newUserData = [];
            foreach ($userData as $user) {
                $newUser = new User();
                $newUser->full_name = $user['full_name'];
                $newUser->username = $user['username'];
                $newUser->password = bcrypt($user['password']);
                $newUser->start_date = $user['start_date'];
                $newUser->role_id = $user['role_id'];
                $newUser->email = $user['email'];
                $newUser->save();
                $newUserData[] = $newUser;
            }

            DB::commit();

            return response()->json([
                'message' => 'create user success',
                'data' => $newUserData,
                'status' => true
            ], 201);
        } catch (\Exception $ex) {
            DB::rollBack();

            return response()->json([
                'message' => 'Lỗi khi tạo người dùng',
                'errors' => $ex->getMessage(),
                'status' => false
            ], 500);
        }
    }

    public function show($id)
    {
        $user = User::with('roles')->find($id);
        if ($user) {
            return response()->json([
                'message' => 'success',
                'data' => $user,
                'status' => true
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found',
                'status' => false
            ], 404);
        }
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required|string|max:255',
                'username' => 'required|string',
                'email' => 'required|email',
            ], [
                'full_name.required' => 'Please enter a full name for user.',
                'username.required' => 'Please enter username.',
                'email.required' => 'Please specify the email for user.',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Lỗi xác thực',
                    'errors' => $validator->errors(),
                    'status' => false
                ], 403);
            }
            $user->full_name = $request->full_name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->save();
            return response()->json([
                'message' => 'update user success',
                'data' => $user,
                'status' => true
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found',
                'status' => false
            ], 404);
        }
    }
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json([
                'message' => 'delete user success',
                'status' => true
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found',
                'status' => false
            ], 404);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|unique:Users,username',
            'password' => 'required|string',
            'email' => 'required|email|unique:Users,email',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => ' Lỗi xác thực',
                'errors' => $validator->errors(),
                'status' => false
            ], 403);
        }
        $user = new User();
        $user->full_name = $request->full_name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->start_date = now();
        $user->role_id = 2;
        $user->save();

        return response()->json([
            'message' => 'Create user success',
            'data' => $user,
            'status' => true
        ], 201);
    }
    public function login(Request $request){

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user || !\Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Unauthorized',
                'status' => false
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login success',
            'token' => $token,
            'status' => true
        ], 200);
    }

    public function getInfo(Request $request)
    {
        return response()->json($request->user());
    }

    public function resetPassword($id) {}
}
