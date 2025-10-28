<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserLogin extends Authenticatable
{
    use HasFactory;
    protected $table = 'user_login'; // Tên bảng trong DB

    protected $fillable = [
        'email', 'password', 'otp_hash', 'otp_expires_at', 'otp_attempts', 'is_verified'
    ];

    protected $hidden = ['password', 'otp_hash'];
}
