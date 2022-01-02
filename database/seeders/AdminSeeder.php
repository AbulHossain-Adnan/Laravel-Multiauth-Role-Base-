<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    'role' => '1',
    'name' => 'admin',
    'email' => 'admin@gmail.com',
    'password' => bcrypt('password'),
]);
         DB::table('users')->insert([
    'role' => '2',
    'name' => 'user',
    'email' => 'user@gmail.com',
    'password' => bcrypt('password'),
]);
         
    }
}
