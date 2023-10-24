<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;

    // method protected variabel table dari tb_user
    protected $table = "tb_user";
    // methode protected variabel primarykey dari kolom user_id
    protected $primaryKey = "user_id";

    // method protected fillable dari data kolom nama, username, dan password
    protected $fillable= ['name', 'username', 'password'];
}
