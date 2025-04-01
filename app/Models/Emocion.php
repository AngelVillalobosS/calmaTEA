<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emocion extends Model
{
    use HasFactory;

    protected $table = 'emociones'; // Nombre de la tabla
    protected $fillable = ['emocion', 'causa', 'fecha']; // Campos que pueden llenarse
}
