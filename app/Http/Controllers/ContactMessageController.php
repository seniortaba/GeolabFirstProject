<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'text' => 'required',
            'gender' => 'required'

        ]);
        Mail::send('template.contact-message',[
            'msg' =>$request->message
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);
            $mail->to('giotabatadze9@gmail.com')->subject('Contact Message');
        });
        return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }
}
