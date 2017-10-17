<?php

namespace App\Http\Controllers;

use Mail;
use App\Contact;
//use App\Mail\Welcome;
use Illuminate\Http\Request;

class MailController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
    	$contact = Contact::orderBy('id', 'desc')->paginate(8);
    	$unread_contact = Contact::where('status','=', false)->count();
    	$total_contact = Contact::count();
    	return view('admin.mail.inbox', [
    		'contact' => $contact,
    		'unread_contact' => $unread_contact,
    		'total_contact' =>  $total_contact
    		 ]);
    }

    public function delete(Contact $message)
    {
        $message->delete();
        return back();
    }

    // showing full guest message to the administrator.
    public function view(Contact $id)
    {
        // update message to old from new. 

        $id->update([
                  'status' => 1
              ]);
        
        return view('admin.mail.read_mail', [
    		'id' => $id,
    		'unread_contact' => Contact::where('status','=', false)->count()
    		 ]);
    }

    public function reply(Request $request, Contact $id)
    { 
        // sending inputs to the app email
        $receiver_name = $id->guest_name;
        $receiver_email = $id->email;

        $data = array(
            'message' => $request->reply
            );
        
        Mail::send('mails.reply', $data, function($message) use ($receiver_email, $receiver_name){   
            $message->from('lucas.agbabiaka@fecund-college.com', 'Lucas Agbabiaka')
                    ->to($receiver_email, $receiver_name)->subject('Fecund support');        
        });

        return "Email Sent Successfully.";
     

    }

}