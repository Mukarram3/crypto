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
            'minbalance' => '50',
            'subscrcost' => '5',
            'description' => 'minimum deposit $35, Subscription cost $5, 71% profit in 72hours',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 2',
            'percent' => '107',
            'subscrcost' => '7',
            'minbalance' => '65',
            'description' => 'minimum deposit $65, Subscription cost $7, 107% profit in 72hours',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 3',
            'percent' => '100',
            'subscrcost' => '10',
            'minbalance' => '182',
            'description' => 'minimum deposit $100, Subscription cost $10, 182% profit in 72hours',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 4',
            'percent' => '210',
            'subscrcost' => '15',
            'minbalance' => '250',
            'description' => 'minimum deposit $250, Subscription cost $15, 210% profit in 72hours.',
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 5',
            'percent' => '380',
            'subscrcost' => '20',
            'minbalance' => '550',
            'description' => 'minimum deposit $550, Subscription cost $20, profit 380% in 72hours.',
        ]);
    }
}
