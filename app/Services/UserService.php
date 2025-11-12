<?php

namespace App\Services;

use App\Models\Users;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService
{
    protected $repo;

    public function __construct(UserRepositoryInterface $repo)
        {
            $this->repo = $repo;
        }

    public function createUserByRegister(int|string $login_Id) {
        $user = new Users();
        $user->login_id = $login_Id;
        $user->save();
    }
}
