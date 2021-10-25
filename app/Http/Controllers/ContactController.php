<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
         $request->validate([
             'email' => 'required|string|max:50',
             'phone_no' => 'required|min:11|max:13',
             'subject' => 'required',
             'message' => 'required',
         ],[
             'email.required' => 'Please input valid email',
         ]);
        
        //  Contact::insert([
        //      'email' => $request->email,
        //      'phone_no' => $request->phone_no,
        //      'subject' => $request->subject,
        //      'message' => $request->message,
        //  ]);
            $contact = new Contact();
            $contact->email = $request->email;
            $contact->phone_no = $request->phone_no;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();

         return redirect()->back()->with('success', 'Data inserted  successfully!');
    }

// get()
// first()
// last()
// latest()
// take()
//paginate()


    public function manage(){
        $contacts = Contact::orderBy('id', 'DESC')->get();
        return view('manage', compact('contacts'));
    }
}


