<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function add(Request $request)
    {
        return view('thanks');
    }
    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $contact = new Contact;
        $form = $request->all();
        unset($form['_token']);
        $contact->fill($form)->save();
        return redirect('/contact/end');
    }
}
