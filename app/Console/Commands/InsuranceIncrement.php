<?php

namespace App\Console\Commands;

use App\Models\Userinsurance;
use App\Models\Plans;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class InsuranceIncrement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Insurance:Increment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//                \Log::info("command is working fine");
        $data = DB::table('usersbalances')->get();
        $data=$data->transform(function($dt){
            if (!empty($dt->insuranceid)){
                $insurance= Insurance::where('id',$dt->insuranceid)->get()->last();
                $dt->balance= $dt->balance+($insurance->extraperplan/100 * $dt->balance);
                $insert = array();
                $insert['balance']=$dt->balance;
                $new = DB::table('usersbalances')->where('id',$dt->id)->update($insert);
                return $dt;
            }

        });
    }
}
