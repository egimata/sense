<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Contact::create($request->all());

        Mail::send('pages.mail',

        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($mail) use ($request){
            $mail->from($request->email, $request->name);
            $mail->to('info@sense.al', 'Admin')->subject($request->get('subject'));
        });


        return redirect()->back()->with('success', 'Faleminderit që na kontaktuat!');
    }


}
