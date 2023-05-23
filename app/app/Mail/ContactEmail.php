<?php
namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @param  Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Form Submission')
                    ->to(env('MAIL_FROM_ADDRESS')) // Set your own email address here
                    ->view('emails.contact-form')
                    ->with([
                        'name' => $this->request->name,
                        'email' => $this->request->email,
                        'phone' => $this->request->phone,
                        'comment' => $this->request->comment,
                    ]);
    }
}
