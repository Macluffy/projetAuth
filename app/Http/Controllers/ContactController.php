<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('backoffice.backofficecontact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        request()->validate([
            "btn1"=>["required","min:1" , "max:200" ],
            "btn2"=>["required","min:1" , "max:200" ],
            "btn3"=>["required","min:1" , "max:200" ],
            "btn4"=>["required","min:1" , "max:200" ],
            "btn5"=>["required","min:1" , "max:200" ],
            "btn6"=>["required","min:1" , "max:200" ],
            "btn7"=>["required","min:1" , "max:200" ],
            "btn8"=>["required","min:1" , "max:200" ],
            "btn9"=>["required","min:1" , "max:200" ],
            "btn10"=>["required","min:1" , "max:200" ],
            "btn11"=>["required","min:1" , "max:200" ],
            "btn12"=>["required","min:1" , "max:200" ],
            "btn13"=>["required","min:1" , "max:200" ],
            
        ]);
        
        $contact->btn1 = $request->btn1;
        $contact->btn2 = $request->btn2;
        $contact->btn3 = $request->btn3;
        $contact->btn4 = $request->btn4;
        $contact->btn5 = $request->btn5;
        $contact->btn6 = $request->btn6;
        $contact->btn7 = $request->btn7;
        $contact->btn8 = $request->btn8;
        $contact->btn9 = $request->btn9;
        $contact->btn10 = $request->btn10;
        $contact->btn11 = $request->btn11;
        $contact->btn12 = $request->btn12;
        $contact->btn13 = $request->btn13;
        
        $contact->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
