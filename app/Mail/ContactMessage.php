<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
    protected $contact;

    /**
     * Create a new message instance.
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
              subject: 'Contact Message',
        );
    }
    public function build()
    {
        // Verify if $this->contact is an array and contains the expected keys
        if (!is_array($this->contact)) {
            return;
        }
        return $this->view('emails.contact')
        ->with([
            'name' => $this->contact['name'] ?? 'No name provided',
            'email' => $this->contact['email'] ?? 'No email provided',
            'content' => $this->contact['content'] ?? 'No content provided',
        ]);
    }
}