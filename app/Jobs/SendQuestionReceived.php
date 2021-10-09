<?php

namespace App\Jobs;

use App\Mail\NewQuestionReceived;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendQuestionReceived implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $backoff = 3;
    public $tries = 3;

    protected $question;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($question)
    {
        $this->question = $question;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
            $email = new NewQuestionReceived($this->question);
            Mail::to(env('OWNER_EMAIL'))->send($email);
        }
        catch(Throwable $e){
            SendJobFailedEmail::dispatch($e->getMessage());
        }
    }
}
