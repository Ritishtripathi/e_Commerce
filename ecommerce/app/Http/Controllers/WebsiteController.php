<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // Method for the home page
    public function home()
    {
        return view('website.index');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function about()
    {
        return view('website.about');
    }
    public function product()
    {
        return view('website.product');
    }

   
    // Add more methods for other pages as needed
}
