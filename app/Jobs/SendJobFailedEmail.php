<?php

namespace App\Jobs;

use App\Mail\JobFailed;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendJobFailedEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $backoff = 3;
    public $tries = 3;

    protected $exceptionMessage;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(String $exceptionMessage)
    {
        $this->exceptionMessage = $exceptionMessage;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new JobFailed($this->exceptionMessage);
        Mail::to(env('DEVELOPER_EMAIL'))->send($email);
    }
}
