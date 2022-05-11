<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\InsuranceNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class InsuranceListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        $user= User::find($event->user->id);
        Notification::send($user, new InsuranceNotification($user,$event->balance));
    }
}
