<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create6000ParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('6000_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->integer('rodamiento');
            $table->foreignId('tipo_sello_id');
            $table->integer('d_interno');
            $table->integer('d_externo');
            $table->string('espesor');
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
        Schema::dropIfExists('6000_parameters');
    }
}
