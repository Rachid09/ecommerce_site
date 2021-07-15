<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('colors')->insert([['name' => "jaune"], ['name' => "bleu"], ['name' => "blanc"], ['name' => "rouge"], ['name' => "vert"], ['name' => "noir"], ['name' => "marron"]]);
    }
}
