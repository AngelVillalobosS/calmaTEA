<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class emociones extends Model
{
    use HasFactory;

    protected $table = 'emociones';

    protected $primaryKey = 'id_emocion'; 

    public $timestamps = true;

    protected $fillable = [
        'emocion','emoji', 'intensidad', 'cuerpo', 'gusto', 'paso', 'razon',
        'repeticion', 'cambiar', 'ayuda', 'animal', 'fecha'
    ];
}
