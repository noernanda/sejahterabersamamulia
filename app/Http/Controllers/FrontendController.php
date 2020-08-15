<?php

namespace App\Http\Controllers;

use App\About;
use App\Slider;
use App\Contact;
use App\Portfolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $abouts = About::all();
        $sliders = Slider::all();
        $contacts = Contact::first();
        $portfolios = Portfolio::all();
        return view('welcome', compact('sliders', 'abouts', 'contacts', 'portfolios'));
    }
}
