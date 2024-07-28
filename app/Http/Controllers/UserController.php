<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

use function Laravel\Prompts\search;
use function Pest\Laravel\get;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $contacts = Contact::all();   

        if($request->has('search')){
            $contact_query = Contact::query();
            $search_term = $request->get('search');
            $contacts = $contact_query->where('name','like', '%'.$search_term.'%')->get();
        }

        $search_term = $request->get('search');
        error_log($contacts->where('name','like', "%".$search_term."%"));

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

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->name = request('name');
        $contact->about = request('about');
        $contact->dob = request('dob');
        $contact->mobile = request('mobile');
        $contact->email = request('email');
        $contact->country = request('country');

        $contact->update();
        return redirect('/')->with('popup', 'Contact updated successfully');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('edit',['contact' => $contact]);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/contacts')->with('popup', 'Contact deleted successfully');
    }
}
