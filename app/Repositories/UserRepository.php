<?php
namespace App\Repositories;

use App\Models\Tours;
use App\Models\Users;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface  {
    public function createUserByRegiter(Users $user){
        $user->save();
    }
}


?>
