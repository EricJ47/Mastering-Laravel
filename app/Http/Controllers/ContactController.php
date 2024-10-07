<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return "<a href='".route('user-contact', parameters: 212)."'>Contact</a>";
    }
}
