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
        $user= User::find($event->user->id);
        Notification::send($user, new planNotification($user,$event->balance));
    }
}
