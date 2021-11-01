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
            //  'phone_no' => 'required|min:11|max:13',
            'phone_no' => 'required|digits_between:11,15',
             'subject' => 'required',
             'message' => 'required',
         ],[
             'email.required' => 'Please input valid email',
             'phone_no.required' => 'Fill is required',
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

         return redirect()->to('manage')->with('success', 'Data inserted  successfully!');
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


    public function delete($id){
        // return $id;
        // dd($id);


        // DB::table('contacts')
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('delete', 'Contact deleted successfully!');
       
    }

    public function edit($id){
        $contact = Contact::find($id);
       return view('edit', compact('contact'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'email' => 'required|string|max:50',
            // 'phone_no' => 'required|numeric|min:10|max:15',
            'phone_no' => 'required|digits_between:0,11',
            'subject' => 'required',
            'message' => 'required',
        ],[
            'email.required' => 'Please input valid email',
        ]);
        $contact = Contact::find($id);
        $contact->update([
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()->to('manage')->with('update', 'Contact updated successfully!');
    }

    public function active($id){
        $contact = Contact::find($id);
        // return $contact->status;
            if($contact->status == 1){
                $contact->update([
                    'status' => 0,
                ]);
            }
            return redirect()->back()->with('inactive', 'Contact inactive successfully!');
    }
    public function inactive($id){
        $contact = Contact::find($id);
        // return $contact->status;
            if($contact->status == 0){
                $contact->update([
                    'status' => 1,
                ]);
            }
            return redirect()->back()->with('active', 'Contact active successfully!');
    }
}


