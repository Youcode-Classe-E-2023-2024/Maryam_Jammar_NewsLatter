<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use App\Mail\UserSubscribedMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailOwnerAboutSubscription
{
    protected $email;

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
     * @param object $event
     * @return void
     */
//    public function handle(UserSubscribed $event)
//    {
//        DB::table('members')->insert([
//            'email' => $event->email
//        ]);
//        Mail::to($event->email)->send(new UserSubscribedMessage());
//    }

    public function handle(UserSubscribed $event)
    {
        DB::table('members')->insert([
            'email' => $event->email
        ]);

        Mail::to($event->email)->send(new UserSubscribedMessage($event->email));
    }

}
