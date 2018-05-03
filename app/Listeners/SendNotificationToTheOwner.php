<?php

namespace App\Listeners;

use App\Events\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendNotificationToTheOwner
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
            $message
                ->from($contact->email, $contact->name)
                ->to('marco.contreras.he@gmail.com', 'Marco')
                ->subject('Fuiste agregado a la agenda');
        });
    }
}
