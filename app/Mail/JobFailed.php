<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Throwable;

class JobFailed extends Mailable
{
    use Queueable, SerializesModels;

    public $exceptionMessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $exceptionMessage)
    {
        $this->exceptionMessage = $exceptionMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.jobFailed');
    }
}
