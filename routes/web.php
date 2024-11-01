<?php

use App\Http\Controllers\AboutController;
// use App\Http\Controllers\BlogController;
// use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
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




Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home', HomeController::class); single action Controller

Route::post('/home', [ImageController::class, 'store'])->name('image.store');

Route::get('/success', function () {
    return '<h1>Successfully upload</h1>';
})->name('success');

Route::get('/download', [ImageController::class, 'download'])->name('download');

Route::get('about', [AboutController::class, 'index']);




Route::get('about', function () {
    $aboutPage = 'this is about page';
    $aboutPage2 = 'this is second about page';
    return view('home.about', compact('aboutPage', 'aboutPage2'));
});


route::get('user/{id}', function ($id) {
    return "User " . $id;
})->name('user-contact');

// Route::get('contact', [ContactController::class,'index']);

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



// Route::resource('blog', BlogController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');