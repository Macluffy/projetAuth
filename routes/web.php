<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FenetreController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TitreController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Fenetre;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Portfolio;
use App\Models\Titre;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('headers', HeaderController::class);

Route::resource('portfolios', PortfolioController::class);

Route::resource('abouts', AboutController::class);

Route::resource('contacts', ContactController::class);

Route::resource('footers', FooterController::class);

Route::resource('fenetres', FenetreController::class);

Route::resource('titres', TitreController::class);

Route::get('/Modif/header', function () {
    $data1 = Header::all();
    return view('backoffice.backofficeheader.modifheader',compact('data1'));
})->middleware(['auth']);

Route::get('/Modif/portfolio', function () {
    $data = Portfolio::all();
    return view('backoffice.backofficeportfolio.modifportfolio',compact('data'));
})->middleware(['auth']);

Route::get('/Modif/about', function () {
    $data3 = About::all();
    return view('backoffice.backofficeabout.modifabout',compact('data3'));
})->middleware(['auth']);

Route::get('/Modif/contact', function () {
    $data4 = Contact::all();
    return view('backoffice.backofficecontact.modifcontact',compact('data4'));
})->middleware(['auth']);

Route::get('/Modif/footer', function () {
    $data5 = Footer::all();
    return view('backoffice.backofficefooter.modiffooter',compact('data5'));
})->middleware(['auth']);

Route::get('/Modif/fenetre', function () {
    $data6 = Fenetre::all();
    return view('backoffice.backofficefenetre.modiffenetre',compact('data6'));
})->middleware(['auth']);

Route::get('/Modif/titre', function () {
    $data7 = Titre::all();
    return view('backoffice.backofficetitre.modiftitre',compact('data7'));
})->middleware(['auth']);


Route::get('/dashboard', function () {
    $data1 = Header::all();
    $data7 = Titre::all();
    return view('dashboard',compact('data1','data7'));
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
