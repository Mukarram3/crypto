<?php

namespace Database\Seeders;

use App\Models\Userinsurance;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $data = new User();
        // $data->name = 'Admin';
        // $data->email= 'admin@gmail.com';
        // $data->password = Hash::make('123456');
        // $data->type = 'admin';
        // $data->balance = '0';
        // $data->save();


        // $data = new User();
        // $data->name = 'User';
        // $data->email= 'user@gmail.com';
        // $data->password = Hash::make('123456');
        // $data->type = 'user';
        // $data->balance = '0';
        // $data->save();

        $this->call([
            PlansSeeder::class,
            InsuranceSeeder::class,
            RoleTableSeeder::class,
            ModelHasRoleSeeder::class,
            UserSeeder::class,        
        ]);
    }
}
