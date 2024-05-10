<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_evento");
            $table->decimal("precio", 8, 2);
            $table->dateTime("fecha_hora");
            $table->text("descripcion");
            $table->integer("aforo");
            $table->integer("aforo_disponible");
            $table->timestamps();

            $table->foreignId("sala_id")->references("id")->on("salas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
