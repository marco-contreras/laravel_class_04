<?php

namespace App\Listeners;

use App\Events\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendAutoResponder
{
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        $contact = $event->contact;

        Mail::send('emails.contact', compact('contact'), function ($message) use ($contact){
            $message->to($contact->email, $contact->name)->subject('Fuiste agregado a la agenda');
        });
    }
}
