<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Request\ContactRequest;
use App\Contact;


class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        
    $contact=new Contact();
    $contact->name=$req->input('name');
    $contact->message=$req->input('message');


    $contact->save();
    return redirect()->route('welcome');
    }

    public function allData()
    {
        return View('welcome',['data'=>Contact::all()]);
    }
}
