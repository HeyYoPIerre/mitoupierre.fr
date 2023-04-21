<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContact;
use App\Mail\MarkdownMail;
use App\Mail\OrderShipped;
use App\Mail\SendContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(StoreContact $request): RedirectResponse
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject_constant = $request->subject_constant;
        $contact->content = $request->content;
        $contact->save();

        $data = $request;

        Mail::to('pierre.mitou1@gmail.com')->send(new SendContact($data));

        return redirect('/')->with('success','Message reçu !');
    }

    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('pages.admin.contacts.index', compact('contacts'));
    }

}
