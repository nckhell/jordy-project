<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nick Hellemans',
            'email' => 'nickhellemans93@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jordy Foerier',
            'email' => 'jordy.f160@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
