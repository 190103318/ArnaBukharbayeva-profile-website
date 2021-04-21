<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;

class SendEmailController extends Controller
{
    function index(){
        return view('contact');
    }

    function send(Request $request){
    	$this->validate($request, [
         'name'   =>     'required',
         'email'     =>    'required|email',
         'message'    =>       'required'
    	]);

    	$data = array(

    		'name'   =>     $request->name,
         'message'    =>      $request->message
    	);
    	Mail::to('Arnabuharbaeva325@gmail.com')->send(new MailSend($data));
    	return back()->with('success', 'Thanks for contacting us!');
    }
}
