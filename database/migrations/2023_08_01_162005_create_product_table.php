<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id_product')->primary();
            $table->string('name_product', 50);
            $table->integer('price_product');
            $table->integer('inventory_product');
            $table->string('type_produdct', 50);
            $table->string('status_product', 50);
            $table->date('create_at')->nullable();
            $table->date('updated_at')->nullable();
            $table->date('deleted_at')->nullable();
            $table->unsignedBigInteger('id')->nullable();
            
            $table->foreign('id', 'product_ibfk_1')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
