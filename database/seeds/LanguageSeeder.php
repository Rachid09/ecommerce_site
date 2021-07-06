<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'abbr', 'locale', 'nom', 'direction', 'is_active'
        DB::table('languages')->insert(['nom' => "arabe", 'locale' => 'ar_ar', 'abbr' => 'ar', 'is_active' => 1, "direction" => 'rtl']);
    }
}
