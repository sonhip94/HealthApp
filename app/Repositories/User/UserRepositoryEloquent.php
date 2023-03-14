<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class userRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
