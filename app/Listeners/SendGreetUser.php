<?php

namespace App\Listeners;

use App\Events\NewUserRegistered;
use App\Mail\GreetNewUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendGreetUser
{

    public $username;
    public $email;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewUserRegistered $event): void
    {
        Mail::to($event->user->email)->send(new GreetNewUser($event->user));
    }
}
