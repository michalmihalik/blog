<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    protected $table = 'users';

    protected $fillable = [
        'meno', 'priezvisko', 'email', 'heslo', 'vek'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
