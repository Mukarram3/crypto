<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
       $user = User::create([
        'name' =>'Admin',
         'email' =>'admin@gmail.com',
         'password' =>Hash::make('123456')
    ]);
    $user->assignRole(['Admin']);

    }
}
