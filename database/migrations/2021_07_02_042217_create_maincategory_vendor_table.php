<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaincategoryVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maincategory_vendor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');

            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->unsignedBigInteger('maincategory_id');

            $table->foreign('maincategory_id')->references('id')->on('main_categories');
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
        Schema::dropIfExists('maincategory_vendor');
    }
}
