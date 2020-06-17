<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadenaParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadena_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->integer('pitch');
            $table->foreignId('tipo_cadena_id');
            $table->foreignId('empate_id');
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
        Schema::dropIfExists('cadena_parameters');
    }
}
