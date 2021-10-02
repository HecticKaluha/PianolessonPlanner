<?php

namespace App\Mail;

use App\Models\Slot;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewBookingReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $slot;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Slot $slot)
    {
        $this->slot = $slot;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.newBookingReceived');
    }
}
