<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
            'status' => 1,
            'created_at' => now(),
            'created_by' => 1,
            'updated_at' => now(),
            'updated_by' => 1
        ]);
    }
}
