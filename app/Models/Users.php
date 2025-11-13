<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable =
    [
        'login_id',
        'name',
        'phone_number',
        'dob',
        'gender',
        'address',
        'role',
    ];

    public function user_login() {
        return $this->belongsTo(UserLogin::class, 'login_id', 'id');
    }
}
