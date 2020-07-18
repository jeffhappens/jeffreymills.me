<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PageController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function portfolio()
    {
        return view('portfolio.index');

    }

    public function contact()
    {
        return view('contact.index');

    }
}
