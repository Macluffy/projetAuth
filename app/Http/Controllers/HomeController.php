<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fenetre;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Portfolio;
use App\Models\Titre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data1 = Header::all();
        $data2 = Portfolio::all();
        $data3 = About::all();
        $data4 = Contact::all();
        $data5 = Footer::all();
        $data6 = Fenetre::all();
        $data7 = Titre::all();




        return view('pages.home',compact('data1','data2','data3','data4','data5','data6','data7'));
    }
}
