<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class UserLogin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'user_login';

    protected $fillable =
    [
        'email','password','otp_hash', 'otp_expires_at','otp_attempts','is_verified',
    ];

    protected $hidden = [
        'password',
        'otp_hash'
    ];
    public function profile()
    {
        return $this->hasOne(Users::class, 'login_id');
    }
}
