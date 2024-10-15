<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
            );
        $request->image->storeAs('images', 'new_image.jpg');
        // return redirect()->route('success');
        return redirect('success');
    }

    public function download() 
    {
        return response()->download(public_path('/storage/images/new_image.jpg'));
        // return Storage::download('/images/new_image.jpg');
        
    }
}
