<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class edsharemodel extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id';

    protected $fillable= [
    'name', 'LastName', 'email', 'password'
    ];
}
