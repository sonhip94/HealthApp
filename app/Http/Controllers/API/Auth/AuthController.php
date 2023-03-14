<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\LoginRequest;

class AuthController extends Controller {
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return response()->json([
                'token' => auth('sanctum')->user()->createToken('token')->plainTextToken,
            ]);
        }

        throw new AuthenticationException();
    }

    public function logout(Request $request)
    {
        Auth::guard('scantum')->logout();

        $session = $request->session();
        $invalidate = $session->invalidate();
        $session->regenerateToken();

        return response()->noContent(200);
    }
}
