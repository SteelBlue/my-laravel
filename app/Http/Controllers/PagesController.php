<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display the welcome screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $name = "Ryan&nbsp;Ebbers";

        return view('pages.about', compact('name'));
    }

    /**
     * Display the experience page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function experience()
    {
        return view('pages.experience');
    }
}