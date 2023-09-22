<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin_user extends Authenticated
{
    use HasFactory,SoftDeletes;

    protected $fillable= [
        'name',
        'email',
        'password',
        'id_role',
    ];
}
