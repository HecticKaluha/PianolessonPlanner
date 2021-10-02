<?php

namespace App\Jobs;

use App\Mail\BookingReceived;
use App\Models\Slot;
use http\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Prophecy\Exception\Doubler\ClassNotFoundException;
use Throwable;

class SendBookingReceivedEmail implements ShouldQueue
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
        try{
            $email = new BookingReceived($this->slot);
            Mail::to($this->slot->email)->send($email);
            $this->slot->emailStatus = true;
            $this->slot->save();
            //set property on slot -> emailStatus true
        }
        catch(Throwable $e){
            //set property on slot -> emailStatus false
            $this->slot->emailStatus = false;
            $this->slot->save();
            SendJobFailedEmail::dispatch($e->getMessage());
        }
    }
}
