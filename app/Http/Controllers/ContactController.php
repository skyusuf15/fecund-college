<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    	 return view('pages.contact');
    }

    public function messageUs(Request $request)
    {
    	
    	$this->validate($request, [
    			'guest_name' => 'required',
    			'email' => 'required|email',
    			'message' => 'required'
    		]);

    	$contact = new Contact;
    	if($contact->create($request->all())) $arrayName = array('header'=>'Sent Successfully!','response' => 'Thank You For Contacting Us', 'status' => 'success');
        else $arrayName = array('header'=>'Sent Failed!','response' => 'An Error Occuered While Trying To Send Message! Please Try Again Later.', 'status' => 'error');

        return $arrayName;
    }
}
