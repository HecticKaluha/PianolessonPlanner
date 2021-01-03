<?php

namespace App\Jobs;

use App\Mail\NewBookingReceived;
use App\Models\Slot;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewBookingReceivedEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $backoff = 3;
    public $tries = 3;

    protected $slot;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Slot $slot)
    {
        $this->slot = $slot;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new NewBookingReceived($this->slot);
        Mail::to(env('OWNER_EMAIL'))->send($email);
    }
}
