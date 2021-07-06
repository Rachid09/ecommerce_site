<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //public function run()

        //
        DB::table('main_categories')->insert(['libelle' => "decoration", 'translation_lang' => 'ar', 'translation_of' => '0', 'libelle' => "decoration", 'is_active' => 1,]);
    }
}
