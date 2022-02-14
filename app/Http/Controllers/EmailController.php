<?php

namespace App\Http\Controllers;

use App\Jobs\MatchSendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class EmailController extends Controller
{
    //
    public function sendEmail()
    {
        // return "send";
        // $to_name = 'nirjhor';
        // $to_email = 'sazzad3029@gmail.com';
        // $data = array('name'=>"Ogbonna Vitalis(sender_name)", "body" => "A test mail");
        // Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        // $message->to("sazzad3029@gmail.com", $to_name)
        // ->subject('Laravel Test Mail');
        // $message->from('nirjhor@nvisio.net','Test Mail');
        // });
        // return "send";
        $emailJob = new MatchSendEmail();
        // MatchSendEmail::dispatch($emailJob)->onQueue('Email');
        dispatch($emailJob);
        
        // dispatch(json_decode("demo", true));
    }
}
