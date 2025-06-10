<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FrontendUser extends Authenticatable
{
    use HasFactory;

    protected $table = 'frontend_user';

    protected $fillable = ['name', 'email', 'password']; // adjust as needed

    protected $hidden = ['password', 'remember_token'];
}
