<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sub_categories')->insert(['parent_id' => '1', 'maincategory_id' => '1', 'name' => "tapis", 'description' => 'nothing', 'meta_title' => 'nothing', 'meta_description' => 'nothing', 'meta_keywords' => 'nothing', 'url' => '', 'status' => 1]);
    }
}
