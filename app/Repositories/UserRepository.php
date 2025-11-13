<?php
namespace App\Repositories;

use App\Models\Users;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface  {

    public function createUserByRegiter(Users $user){
        $user->save();
    }

    public function getProfile(int $login_id) {
        return Users::where('login_id', $login_id)->with('user_login:id,email') ->first();
    }
}


?>
