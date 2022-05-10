<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2021-08-25 06:28:17',
                'updated_at' => '2021-08-25 06:28:17',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'User',
                'guard_name' => 'web',
                'created_at' => '2021-08-25 06:28:17',
                'updated_at' => '2021-08-25 06:28:17',
            ),
        ));

    }
}
