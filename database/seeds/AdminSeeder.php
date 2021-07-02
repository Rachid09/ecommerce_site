<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert(['nom' => "rachid", 'prenom' => "ahsoune", 'email' => 'dima_fox_@hotmail.com', 'password' => bcrypt('admin')]);
    }
}
