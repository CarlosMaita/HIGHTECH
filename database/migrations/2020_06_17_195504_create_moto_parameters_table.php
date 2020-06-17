<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotoParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moto_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->integer('d_interno');
            $table->integer('d_externo');
            $table->integer('espesor');
            $table->foreignId('tipo_sello_id');
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
        Schema::dropIfExists('moto_parameters');
    }
}
