<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();   
        return view('index',['contacts' => $contacts,]);
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('show',['contact' => $contact]);
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = request('name');
        $contact->about = request('about');
        $contact->dob = request('dob');
        $contact->mobile = request('mobile');
        $contact->email = request('email');
        $contact->country = request('country');

        $contact->save();
        return redirect('/')->with('popup', 'Contact created successfully');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/contacts')->with('popup', 'Contact deleted successfully');
    }
}
