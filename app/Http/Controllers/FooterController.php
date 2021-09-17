<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
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
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('backoffice.backofficefooter.edit',compact('footer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
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
            
        ]);
        
        $footer->btn1 = $request->btn1;
        $footer->btn2 = $request->btn2;
        $footer->btn3 = $request->btn3;
        $footer->btn4 = $request->btn4;
        $footer->btn5 = $request->btn5;
        $footer->btn6 = $request->btn6;
        $footer->btn7 = $request->btn7;
        $footer->btn8 = $request->btn8;
        $footer->btn9 = $request->btn9;
        
        $footer->save();
        

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('headers.index');
    }
}
