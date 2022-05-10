<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\planNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class planListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user= User::where('id',$event->user->id)->first();
        Notification::send($user, new planNotification($event->user,$event->balance));
    }
}
