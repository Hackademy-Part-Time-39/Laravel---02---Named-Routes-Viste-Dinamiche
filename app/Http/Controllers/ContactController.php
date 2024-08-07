<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //Pagina contatti
    public function index () {
        return view('contatti.index');
    }

    //Submit form
    public function submit (Request $request) {
        Mail::to('edoardo.valenza@aulab.it')->send(new ContactForm($request));

        return redirect('/conferma-invio-messaggio');
    }

    //Conferma invio messaggio
    public function confirmation () {
        return view('contatti.confirmation');
    }
}
