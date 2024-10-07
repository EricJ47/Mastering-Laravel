<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = [
            [
                'title' => 'First Blog',
                'content' => 'First Blog content',
                'status' => 'published',
    
            ],
            [
                'title' => 'Second Blog',
                'content' => 'Second Blog content',
                'status' => 'draft',
    
            ],
            [
                'title' => 'Third Blog',
                'content' => 'Third Blog content',
                'status' => 'published',
    
            ],
            [
                'title' => 'fourth Blog',
                'content' => 'fourth Blog content',
                'status' => 'published',
    
            ],
            
        ];
    
        return view('home.index', compact('blogs'));
    }
}