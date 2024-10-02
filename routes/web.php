<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
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
});


Route::get('about', function () {
    $aboutPage = 'this is about page';
    $aboutPage2 = 'this is second about page';
    return view('home.about', compact('aboutPage', 'aboutPage2'));
});

route::get('user/{id}', function ($id) {
    return "User " . $id;
})->name('user-contact');

Route::get('contact', function () {
    return "<a href='".route('user-contact', 212)."'>Contact</a>";
});

// Grouping
route::group(['prefix' => 'client'], function () {
    Route::get('/', function () {
        return "<h1>Client PAge</h1>";
    });
    Route::get('/create', function () {
        return "<h1>Create Client</h1>";
    });
    Route::get('/edit', function () {
        return "<h1>Editing Client Page</h1>";
    });
    Route::get('/show', function () {
        return "<h1>Showing Client</h1>";
    });

});
