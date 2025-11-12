<?php
namespace App\Repositories\Interfaces;

use App\Models\Users;

interface UserRepositoryInterface{
    public function createUserByRegiter(Users $user);
}


?>
