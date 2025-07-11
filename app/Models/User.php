<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    protected static $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
    ];
}