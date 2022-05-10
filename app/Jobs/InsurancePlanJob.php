<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Userselectedinsurance;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class InsurancePlanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $user,$plan;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user,$plan)
    {
        $this->user=$user;
        $this->plan=$plan;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $loggeduserid=$this->user->id;
        $loggeduserbalance=$this->user->balance;
        $insuranceplanid=$this->plan->id;
        $insuranceplanpercent=$this->plan->percent;

        $balance=$loggeduserbalance;
        $balance= $balance+($insuranceplanpercent/100 * $loggeduserbalance);
        $insert = array();
        $insert['balance']=$balance;
        $new = User::where('id',$loggeduserid)->update($insert);

        Userselectedinsurance::where('userid',$loggeduserid)->where('insuranceid',$insuranceplanid)->delete();
    }
}
