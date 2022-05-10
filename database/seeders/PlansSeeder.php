<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'Plan 1',
            'percent' => '71',
            'minbalance' => '35',
            'description' => 'minimum deposit $35 
            71% profit in 72hours',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 2',
            'percent' => '107',
            'minbalance' => '65',
            'description' => 'minimum deposit $65 
            107% profit in 72hours',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 3',
            'percent' => '100',
            'minbalance' => '182',
            'description' => 'minimum deposit $100
            182% profit in 72hours',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 4',
            'percent' => '210',
            'minbalance' => '250',
            'description' => 'minimum deposit $250
            210% profit in 72hours.',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 5',
            'percent' => '380',
            'minbalance' => '550',
            'description' => 'minimum deposit $550 profit 380% in 72hours.',
        ]);
    }
}
