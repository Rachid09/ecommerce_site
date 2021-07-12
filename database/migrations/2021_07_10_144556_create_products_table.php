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
            $table->id();
            $table->integer('maincategory_id');
            $table->integer('seller_id');
            $table->string('name');
            $table->string('code');
            $table->string('color');
            $table->string('price');
            $table->string('discount');
            $table->string('weight');
            $table->string('main_image');
            $table->string('description');
            $table->enum('is_featured', ['No', 'Yes']);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('products');
    }
}
