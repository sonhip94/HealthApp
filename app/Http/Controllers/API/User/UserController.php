<?php

namespace App\Http\Controllers\API\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\LoginRequest;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct (UserService $userService) {
        $this->userService = $userService;
    }

    public function show(Request $request)
    {
        return response()->json([
            'user' => $request->user(),
        ]);
    }

    public function diaries(Request $request)
    {
        $user = $request->user();
        $response = $this->userService->diaries($user);

        return response()->json([
            'diaries' => $response,
        ]);
    }

    public function notifications(Request $request)
    {
        $user = $request->user();
        $response = $this->userService->notifications($user);

        return response()->json([
            'notifications' => $response,
        ]);
    }

    public function challenges(Request $request)
    {
        $user = $request->user();
        $response = $this->userService->challenges($user);

        return response()->json([
            'challenges' => $response,
        ]);
    }

    public function body(Request $request)
    {
        $user = $request->user();
        $response = $this->userService->body($user);

        return response()->json([
            'body' => $response,
        ]);
    }

    public function exercises(Request $request)
    {
        $user = $request->user();
        $response = $this->userService->exercises($user);

        return response()->json([
            'exercises' => $response,
        ]);
    }
}
