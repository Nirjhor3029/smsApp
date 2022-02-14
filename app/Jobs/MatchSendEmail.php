<?php

namespace App\Jobs;

use App\Mail\HelloEmail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MatchSendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $email = new HelloEmail();
        Mail::to("sazzad3029@gmail.com")->send($email);
        
        // $user = new User();
        // $user->name = "nirjhor";
        // $user->email = "nirjhor@".rand(1,50).".com";
        // $user->password = "nirjhor";
        // $user->save();
    }
}
