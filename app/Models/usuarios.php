<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuarios extends Authenticatable 
{
    use HasFactory;

    protected $table = 'usuarios'; 
    protected $primaryKey = 'id_usuario'; 

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'password',
        'email_verified_at' 
    ];

    protected $hidden = [
        'password',
        'remember_token' 
    ];
}