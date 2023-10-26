<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan namespace model User sudah sesuai


class AuthController extends Controller
{

    private $users;

    public function __construct()
    {
        $this->users = [
            'riyanmaulana402@yahoo.co.id' => 'password',
        ];
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if ($this->isValidCredentials($credentials)) {
            $token = $this->generateToken();

            $user = User::where('email', $credentials['email'])->first();
            $user->api_token = $token;
            $user->save();

            return response()->json(['token' => $token]);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    private function isValidCredentials($credentials)
    {
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            return true;
        }

        return false;
    }

    private function generateToken()
    {
        return base64_encode(random_bytes(32));
    }
}