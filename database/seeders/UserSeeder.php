<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'João',
            'email' => 'jpedrols@gmail.com',
            'password' => Hash::make('joao123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
