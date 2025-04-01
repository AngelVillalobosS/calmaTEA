<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuarios extends Authenticatable // Nombre correcto
{
    use HasFactory;

    protected $table = 'usuarios'; // Mantén el nombre de tu tabla
    protected $primaryKey = 'id_usuario'; // Añade esto si no puedes cambiar la BD

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'password',
        'email_verified_at' // Añade este campo
    ];

    protected $hidden = [
        'password',
        'remember_token' // Añade esto
    ];
}