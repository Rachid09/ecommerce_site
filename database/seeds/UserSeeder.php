<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(['name' => 'rachid', 'email' => 'rachid@hotmail.com', 'password' => bcrypt('admin')]);
    }
}
