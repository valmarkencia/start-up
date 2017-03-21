<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Mail;

class EmailController extends Controller
{
    public function sendmail(Request $request)
    {
		$success = Mail::send('emails.contact', $request->toArray(), function ($message)
		{
	        $message->to('valmarkencia@gmail.com')
	        		->from('valmarkencia@gmail.com', 'You received a message from valenciamark.com:')
        			->subject('Message from valenciamark.com');
    	});

	if(!$success){
		$email = new Email;
		$email->email = $request['email'];
		$email->msg = $request['msg'];
		$email->save();
		return redirect()->back()->with('sent-mail', "Message sent! Thank you for contacting me. I'll get back to you as soon as possible. Have a nice day!");
	}
	else{
		return redirect()->back()->with('error', "Something went wrong. Please try again later!");
	}
    }

    public function subscribe(Request $request)
    {
		$check_email = Email::where('email', $request['email'])->get();
    	if($request->ajax())
		{
				if(count($check_email) > 0)
				{
					return $request['email'];
				}
				else
				{
					$success = Mail::send('emails.subscribe', $request->toArray(), function ($message)
						{
				        	$message->to('valmarkencia@gmail.com')
				        		->from('valmarkencia@gmail.com', 'You received a subsciption email from valenciamark.com:')
				        		->subject('Subscription for valenciamark.com');
				        });

					if(!$success){
							$email = new Email;
							$email->msg = $request['msg'];
							$email->email = $request['email'];
							$email->save();
							return 'success';
						}
				}
		}
		else
		{
			if (count($check_email) > 0)
			{
				return Redirect::to(URL::previous() . "#form-response")->with('email-exist', "Email already used. Please use another email.");
			}
			else
			{
		    	$success = Mail::send('emails.subscribe', $request->toArray(), function ($message)
		    	{
			        $message->to('valmarkencia@gmail.com')
			        		->from('valmarkencia@gmail.com', 'You received a subsciption email from valenciamark.com:')
			        		->subject('Subscription for valenciamark.com');
				});

				if(!$success){
					$email = new Email;
					$email->msg = $request['msg'];
					$email->email = $request['email'];
					$email->save();
					return Redirect::to(URL::previous() . "#form-response")->with('status', "Thank you for subscribing!");
				}
				else{
					return Redirect::to(URL::previous() . "#form-response")->with('failed', "Something went wrong. Please try again later!");
				}
			}
		
    	}
}
}
