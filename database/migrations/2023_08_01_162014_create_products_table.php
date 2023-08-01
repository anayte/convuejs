<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id_product')->primary();
            $table->string('name_product', 50);
            $table->integer('price_product');
            $table->integer('inventory_product');
            $table->string('type_product', 50);
            $table->string('status_product', 50);
            $table->timestamps();
            $table->date('deleted_at')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->longblob('image_product');
            
            $table->foreign('id_user', 'products_ibfk_1')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
