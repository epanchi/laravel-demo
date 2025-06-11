<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'userid';

    protected $fillable = ['name', 'email', 'password']; // adjust as needed

    protected $hidden = ['password', 'remember_token'];
}
