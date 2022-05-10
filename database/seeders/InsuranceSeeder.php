<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insurances')->insert([
            'name' => 'basic',
            'percent' => '3',
            'extraperplan' => '12',
            'withdrawaldiscount' => '5',
            'bettingwinrate' => '20',
            'minbalance' => '50',
            'description' => 'Basic Insurance is for balance under $50. $3 per 72 hours for 12% extra per plan and 5% withdrawal discount + increase betting win by 20%',
        ]);
        DB::table('insurances')->insert([
            'name' => 'vip',
            'percent' => '7',
            'extraperplan' => '42',
            'withdrawaldiscount' => '15',
            'bettingwinrate' => '50',
            'minbalance' => '100',
            'description' => 'VIP insurance is for balance over $100. $7 per 72 hours for 42% extra Per plan and 15% withdrawal discount. + Increase bet win rate by 50%',
        ]);
        DB::table('insurances')->insert([
            'name' => 'vip+',
            'percent' => '12',
            'extraperplan' => '71.2',
            'withdrawaldiscount' => '20',
            'bettingwinrate' => '80',
            'minbalance' => '100',
            'description' => '$12 per 72 hours for 71.2% extra per plan and 20% withdrawal discount + Increase bet win rate by 80%',
        ]);
        DB::table('insurances')->insert([
            'name' => 'vip++',
            'percent' => '20',
            'extraperplan' => '100',
            'withdrawaldiscount' => '25',
            'bettingwinrate' => '92.9',
            'minbalance' => '100',
            'description' => '$20 per 72hours for 100% extra per plan and 25% withdrawal discount + increase bet win rate by 92.9%',
        ]);
    }
}
