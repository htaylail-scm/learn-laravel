<?php

namespace App\Http\Controllers\Sms;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Http\Controllers\Controller;

class SendSMSController extends Controller
{
    public function index()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("877dc302", "e6oSJKspYQX4SwZt");
        $client = new \Vonage\Client($basic);
 
        $message = $client->message()->send([
            'to' => '3242342424',
            'from' => 'Nexmo',
            'text' => 'A text message sent using the Nexmo SMS API'
        ]);
 
        // dd($message);
        dd('message send successfully');


        // $response = $client->sms()->send(
        //     new \Vonage\SMS\Message\SMS("959976531581", 'test sms', 'A text message sent using the Nexmo SMS API')
        // );
        
        // $message = $response->current();
        
        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }       
    }

    public function sendMessage()
    {
       Nexmo::message()->send([
        'to' => '959976531581',
        'from' => '959976531581',
        'text' => 'this is test for message',
       ]);

        dd("Message send successfully");
    }
}
