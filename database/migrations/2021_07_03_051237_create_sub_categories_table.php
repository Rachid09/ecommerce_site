<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->integer('maincategory_id');
            $table->string('name');
            $table->string('photo');
            $table->float('discount');
            $table->text('description');
            $table->string('meta_title');
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('url');
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
        Schema::dropIfExists('sub_categories');
    }
}
