<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('emociones', function (Blueprint $table) {
            $table->id();
            $table->varchar('emocion');  // Guarda el nombre de la emoción
            $table->text('causa')->nullable(); // Guarda la respuesta del usuario
            $table->datetime('fecha')->useCurrent(); // Guarda la fecha y hora actual
            $table->timestamps(); // Crea los campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('emociones');
    }
};
