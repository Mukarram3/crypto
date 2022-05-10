<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Userplan;
use App\Models\Usersbalance;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

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

       \Log::info("croncroncroncron is working fine");
        // $data = DB::table('usersbalances')->get();
        // $data=$data->transform(function($dt){
        //     $plan= Userplan::where('id',$dt->planid)->get()->last();
        //     $dt->balance= $dt->balance+($plan->percent/100 * $dt->balance);
        //     $inser = array();
        //     $inser['balance']=$dt->balance;
        //     $new = DB::table('usersbalances')->where('id',$dt->id)->update($inser);
        //     return $dt;
        // });
    }
}
