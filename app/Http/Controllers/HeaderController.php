<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('backoffice.backofficeheader.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        request()->validate([
            "btn1"=>["required","min:1" , "max:200" ],
            "btn2"=>["required","min:1" , "max:200" ],
            "btn3"=>["required","min:1" , "max:200" ],
            "btn4"=>["required","min:1" , "max:200" ],
            "btn5"=>["required","min:1" , "max:200" ],  
            "img1"=>["required","min:1" , "max:200" ],
            "btn6"=>["required","min:1" , "max:200" ],
            "btn7"=>["required","min:1" , "max:200" ],
        ]);
        
        $header->btn1 = $request->btn1;
        $header->btn2 = $request->btn2;
        $header->btn3 = $request->btn3;
        $header->btn4 = $request->btn4;
        $header->btn5 = $request->btn5;
        $header->img1 = $request->file('image')->hashName();;
        $header->btn6 = $request->btn6;
        $header->btn7 = $request->btn7;
        $header->save();
        Storage::disk('public')->delete('img/'. $header->img1);
        $request->file('image')->storePublicly('img','public');

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        Storage::disk('public')->delete('img/'. $header->img1);
        $header->delete();
        return redirect()->route('headers.index');
    }
}
