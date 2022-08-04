<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_empresas', function (Blueprint $table) {
            $table->id();

            $table->string('razon_social');
            $table->string('documento');
            $table->string('persona_contacto');
            $table->string('cargo');
            $table->string('email')->unique();
            $table->string('telefono')->unique();
            $table->string('ingreso_anual');
            $table->string('tiempo_actividad');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_empresas');
    }
}
