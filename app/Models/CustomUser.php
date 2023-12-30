<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomUser extends Authenticatable
{
    protected $table = 'create_login_models'; // Specify your actual table name

    protected $fillable = [
        'Name', 'IndexNumber', 'userName', 'role', 'password', // Add other fields that can be mass-assigned
    ];

    protected $hidden = [
        'password', 'remember_token', // Add other fields you want to hide
    ];

    // Customize other properties, relationships, or configurations as needed
}
