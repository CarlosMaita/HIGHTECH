<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('articulo');
            $table->text('aplicacion');
            $table->foreignId('posicion_id');
            $table->integer('d_interno');
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
        Schema::dropIfExists('auto_parameters');
    }
}
