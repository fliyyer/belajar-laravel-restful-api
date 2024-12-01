<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;
}
