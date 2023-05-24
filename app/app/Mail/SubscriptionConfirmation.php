<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class SubscriptionConfirmation extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct()
    {
        // Constructor logic, if any
    }

    public function build()
    {
        return $this->markdown('emails.subscription_confirmation')
                    ->subject('Subscription Confirmation'); 
    }
}

