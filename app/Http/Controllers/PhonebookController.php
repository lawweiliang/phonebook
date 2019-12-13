<?php

namespace App\Http\Controllers;

use App\Contact;
use App\ContactCategory;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{

    public function index()
    {
        //Grab all the contact from database 
        $contacts = Contact::with('contactcategory')
            ->orderby('last_name')
            ->get();

        //Compile every data into one variable
        $data = [
            'contacts' => $contacts
        ];

        //Pass the data to frontend
        return view('pages.contact', ['data' => $data]);
    }

    public function store(Request $request)
    {
        //Validate request
        $input = $request->validate([
            'contactcategory' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'phone_no' => 'required'
        ]);

        //Insert record to the database
        $contact = new Contact;
        $contact->contact_category_id = $input['contactcategory'];
        $contact->last_name = $input['last_name'];
        $contact->first_name = $input['first_name'];
        $contact->phone_no = $input['phone_no'];
        $result_code = $contact->save();

        //Session flash
        $message = [
            'message_code' => $result_code,
            'message_desc' => $result_code ? 'Successfully Added.' : 'Failed to add.'
        ];
        session()->flash('message', $message);

        //Redirect back to contact page
        return redirect('/');
    }

    public function show()
    {

        $contactCategories = ContactCategory::all();

        //Compile every data into one variable
        $data = [
            'contactCategories' => $contactCategories
        ];

        //Pass the data to frontend
        return view('pages.addcontact', ['data' => $data]);
    }
}
