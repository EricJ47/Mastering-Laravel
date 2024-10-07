<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutPage = 'this is about page';
        $aboutPage2 = 'this is second about page';
        return view('home.about', compact('aboutPage', 'aboutPage2'));
    }
}
