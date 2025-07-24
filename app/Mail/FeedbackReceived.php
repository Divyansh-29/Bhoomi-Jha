<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * 
     */
    public $feedback;
    public function __construct($feedback)
    {
        $this->feedback = $feedback;
    }

     public function build()
    {
        return $this->subject('New Feedback Received')
                    ->markdown('emails.feedback.received');
    }

    
}
