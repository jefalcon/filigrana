<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteResidencialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_residencials', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->date('fx_nacimiento');
            $table->string('documento');
            $table->string('email')->unique();
            $table->string('telefono')->unique();
            $table->string('ingresos');
            $table->string('antiguedad');

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
        Schema::dropIfExists('cliente_residencials');
    }
}
