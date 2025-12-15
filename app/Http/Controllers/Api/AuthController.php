<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // POST /api/login
    public function login(Request $request)
    {
        // Pastikan validasi dasar (walaupun tidak terlihat di sini)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Email atau Password salah. Unauthorized'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        // Membuat Token Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Hi ' . $user->name . ', welcome to home',
            'token' => $token, // <-- PERBAIKAN: Menggunakan kunci 'token'
            'token_type' => 'Bearer',
        ]);
    }

    // POST /api/logout
    public function logout(Request $request)
    {
        // Hapus token yang sedang digunakan
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ]);
    }
}