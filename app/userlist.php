<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userlist extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','role'
    ];
}
