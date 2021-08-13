<?php

namespace Database\Seeders;

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
        DB::table('admins')->insert([
            'email' => 'admin@demo.com',
            'password'=>bcrypt('password'),
            'name' => 'houcine',
            'is_super'=>true,
        ]);
    }
}
