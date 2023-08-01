<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->integer('id_compra')->primary();
            $table->string('cantidad_compra', 50);
            $table->integer('estado_compra');
            $table->integer('id_product');
            $table->unsignedBigInteger('id_user')->nullable();
            
            $table->foreign('id_user', 'compra_ibfk_1')->references('id')->on('users');
            $table->foreign('id_product', 'compra_ibfk_2')->references('id_product')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
