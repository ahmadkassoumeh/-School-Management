<?php

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
            'name' => 'ahmad kassoumeh',
            'email' => 'ahmad.kassoumeh@outlook.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}