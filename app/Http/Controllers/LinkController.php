<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /* Show the signup and store bread crumbs.
    *
    *
    */
    public function getSignupWithLinkId(Request $aRequest, $signupType, $linkId) {

      //store link id

      return view('signup');
    }



}
