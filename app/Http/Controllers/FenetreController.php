<?php

namespace App\Http\Controllers;

use App\Models\Fenetre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FenetreController extends Controller
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
     * @param  \App\Models\Fenetre  $fenetre
     * @return \Illuminate\Http\Response
     */
    public function show(Fenetre $fenetre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fenetre  $fenetre
     * @return \Illuminate\Http\Response
     */
    public function edit(Fenetre $fenetre)
    {
        return view('backoffice.backofficefenetre.edit',compact('fenetre'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fenetre  $fenetre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fenetre $fenetre)
    {
        request()->validate([
            "btn1"=>["required","min:1" , "max:200" ],
            "img"=>["required","min:1" , "max:200" ],
            "btn2"=>["required","min:1" , "max:200" ],
            "btn3"=>["required","min:1" , "max:200" ],
        ]);
        $fenetre->btn1 = $request->btn1;
        $fenetre->img = $request->file('image')->hashName();
        $fenetre->btn2 = $request->btn2;
        $fenetre->btn3 = $request->btn3;
        $fenetre->save();
        Storage::disk('public')->delete('img/'. $fenetre->img);
        $request->file('image')->storePublicly('img','public');

        return redirect()->route('fenetres.index',compact('fenetre'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fenetre  $fenetre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fenetre $fenetre)
    {
        Storage::disk('public')->delete('img/'. $fenetre->img);
        $fenetre->delete();
        return redirect()->route('fenetres.index');
    }
}
