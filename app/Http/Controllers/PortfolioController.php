<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
        $data = Portfolio::all();
        return view('backoffice.backofficeportfolio.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "img"=>["required","min:1" , "max:200" ],
        ]);
        $data = new Portfolio();
        $data->img = $request->file('image')->hashName();
        $data->save();
        $request->file('image')->storePublicly('img','public');

        return redirect()->route('porfolios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.backofficeportfolio.show',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backoffice.backofficeportfolio.edit',compact('portfolio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        request()->validate([
            "img"=>["required","min:1" , "max:200" ],
        ]);
        $portfolio->img = $request->file('image')->hashName();;
        $portfolio->save();
        Storage::disk('public')->delete('img/'. $portfolio->img);
        $request->file('image')->storePublicly('img','public');

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        
        Storage::disk('public')->delete('img/'. $portfolio->img);
        $portfolio->delete();
        return redirect()->route('portfolios.index');
    }
}
