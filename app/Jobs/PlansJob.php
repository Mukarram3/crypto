<?php

namespace App\Jobs;

use App\Events\planevent;
use App\Models\User;
use App\Models\Userselectedplan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PlansJob implements ShouldQueue
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
        $planid=$this->plan->id;
        $planpercent=$this->plan->percent;

        $newbalance=$planpercent/100 * $loggeduserbalance;
        $totalbalance= $loggeduserbalance+$newbalance;
        $insert = array();
        $insert['balance']=$totalbalance;
        $new = User::where('id',$loggeduserid)->update($insert);

        event(new planevent($this->user,$newbalance));

        Userselectedplan::where('userid',$loggeduserid)->where('planid',$planid)->delete();
    }
}
