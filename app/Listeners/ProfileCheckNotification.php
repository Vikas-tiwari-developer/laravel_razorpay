<?php

namespace App\Listeners;

use App\Events\SomeOneCheckProfile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\ProfileCheckedJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProfileCheckMail;

class ProfileCheckNotification implements ShouldQueue
{

    public int $delay = 5;
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
     * @param  \App\Events\SomeOneCheckProfile  $event
     * @return void
     */
    public function handle(SomeOneCheckProfile $event)
    {
        // $event->user
        // $delay = now()->addSeconds(5);
        // ProfileCheckedJob::dispatch($event->user)->delay($delay);

        /*======-------  We Can remove Jobs from here and directely send mail via listners. To do this we have to change class ProfileCheckNotification (10) to  class ProfileCheckNotification implements ShouldQueue ------======*/

        // After Changing
        Mail::to($event->user->email)->send(new ProfileCheckMail($event->user));

        // This working same as Jobs Queue
    }
}
