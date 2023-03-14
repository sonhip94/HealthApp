<?php

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Menu;
use Carbon\Carbon;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function diaries($user)
    {
        return $user->diaries()->paginate();
    }

    public function notifications($user)
    {
        return $user->notifications()->paginate();
    }

    public function challenges($user)
    {
        return $user->challenges()->paginate();
    }

    public function body($user)
    {
        return $user->body()->select('balance', 'created_at')->get();
    }

    public function exercises($user)
    {
        return $user->exercises->filter(function ($exercise) {
            return $exercise->created_at->format('Y-m-d') == now()->format('Y-m-d');
        });
    }
}
