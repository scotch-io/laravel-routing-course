<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{

    public function __construct() {

        $this->middleware('jwt.auth', ['only' => 'getContact']);
    }
    
    /**
     * Show the home page
     */
    public function getHome()
    {
        return view('home');
    }

    /**
     * Show the about page
     */
    public function getAbout()
    {
        return view('about');
    }

    /**
     * Show the contact page
     */
    public function getContact()
    {
        return view('contact');
    }

    /**
     * Process the contact form
     */
    public function postContact(Request $request)
    {
        dd($request->all());
    }

}
