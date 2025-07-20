<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
     public string $messageContent;

    public function __construct(string $messageContent)
    {
        $this->messageContent = $messageContent;
    }

    public function build(): static
    {
        return $this->subject('Test Email from Laravel 12')
                    ->view('emails.test');
    }
}
