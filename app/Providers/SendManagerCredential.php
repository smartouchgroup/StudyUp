<?php

namespace App\Providers;

use App\Providers\ManagerAdded;
use App\Mail\AccountCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendManagerCredential
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
     * @param  \App\Providers\ManagerAdded  $event
     * @return void
     */
    public function handle(ManagerAdded $event)
    {
        Mail::to($event->userEmail)->send(new AccountCreatedMail($event->mailData));
    }
}
