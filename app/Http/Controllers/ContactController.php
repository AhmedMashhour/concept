<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send_message()
    {
        $data=$this->validate(\request(),[
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'subject'=>'required|string',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        Contact::create($data);
        session()->flash('added','The Message sent Successfully');
        return redirect(url('/contact'));
    }
}
