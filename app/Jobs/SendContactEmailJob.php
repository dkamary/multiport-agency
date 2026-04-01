<?php

namespace App\Jobs;

use App\Mail\ContactSubmissionMail;
use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $submission;

    /**
     * Create a new job instance.
     */
    public function __construct(ContactSubmission $submission)
    {
        $this->submission = $submission;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $receiver = config('mail.receiver_address', env('MAIL_RECEIVER_ADDRESS'));
        
        if ($receiver) {
            Mail::to($receiver)->send(new ContactSubmissionMail($this->submission));
        }
    }
}
