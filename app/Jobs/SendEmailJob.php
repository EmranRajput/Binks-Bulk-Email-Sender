<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $mailData;
    public function __construct($email, $mailData)
    {
        $this->email = $email;
        $this->mailData = $mailData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         if (!empty($this->email) && filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        Mail::to($this->email)->send(new SendMail($this->mailData));
    } else {
        \Log::warning('Skipped invalid or empty email: ' . $this->email);
    }
    }
}
