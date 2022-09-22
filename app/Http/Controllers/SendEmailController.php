<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Mail;
 
use App\Mail\NotifyMail;
 
 
class SendEmailController extends Controller
{
     
    public function index()
    {
 
      Mail::to('scm.htaylail@gmail.com')->send(new NotifyMail());
 
      if (Mail::failures()) {
           dd('Sorry! Please try again latter');
      }else{
           dd('Great! Successfully send in your mail');
         }
    } 
}