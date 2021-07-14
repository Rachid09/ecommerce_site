<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products_images')->insert(['product_id' => "10", 'product_image' => 'images/products/oPS9XxZGWhlbFm0EzYcok2VvNtJUi3oPzDZDUHKP.png', 'status' => '1']);
    }
}
