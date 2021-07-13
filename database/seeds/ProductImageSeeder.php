<?php

use Illuminate\Database\Seeder;
use DB;

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

        DB::table('products_images')->insert(['product_id' => "8", 'product_image' => 'images/products/oPS9XxZGWhlbFm0EzYcok2VvNtJUi3oPzDZDUHKP.png', 'status' => '1']);
    }
}
