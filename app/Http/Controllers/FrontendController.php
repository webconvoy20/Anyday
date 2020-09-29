<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\ContactForm;

class FrontendController extends Controller
{
    public function index()
	{
		return view('frontend.home');
	}

	public function contactUs()
	{
		return view('frontend.contact-us');
	}

	public function addContactForm(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('contact-us')
                        ->withErrors($validator)
                        ->withInput();
        }
		$contact = new ContactForm();
		$contact->full_name = $request->full_name;
		$contact->email = $request->email;
		$contact->phone = $request->phone;
		$contact->message = $request->message;
		$contact->save();
		if($contact)
		{
			return redirect()->back()->withSuccess('Message Sent successfully!');
		}
		else
		{
			return redirect()->back()->withError('Something went wrong!');

		}
	}
}


