<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {

        // return DB::table('posts')->where('id', '>', '5')->where('status', 0)->get();
        // return DB::table('posts')->where('status', 0)->pluck('title', 'id');
        // $blogs = [
        //     [
        //         'title' => 'First Blog',
        //         'content' => 'First Blog content',
        //         'status' => 'published',

        //     ],
        //     [
        //         'title' => 'Second Blog',
        //         'content' => 'Second Blog content',
        //         'status' => 'draft',

        //     ],
        //     [
        //         'title' => 'Third Blog',
        //         'content' => 'Third Blog content',
        //         'status' => 'published',

        //     ],
        //     [
        //         'title' => 'fourth Blog',
        //         'content' => 'fourth Blog content',
        //         'status' => 'published',

        //     ],

        // ];

        // return view('home.index', compact('blogs'));
// insert data
        // DB::table('posts')->insert([
        //     [
        //         'title' => 'test First Blog',
        //         'content' => 'First Blog content',
        //         'status' => 1,
        //         'published_at' => now(),
        //         'user_id' => 3,
        //         'category_id' => 1
        //     ],
        //     [
        //         'title' => 'test Second Blog',
        //         'content' => 'Second Blog content',
        //         'status' => 0,
        //         'published_at' => now(),
        //         'user_id' => 3,
        //         'category_id' => 2
        //     ],
        //     [
        //         'title' => 'test third Blog',
        //         'content' => 'Second Blog content',
        //         'status' => 1,
        //         'published_at' => now(),
        //         'user_id' => 3,
        //         'category_id' => 3
        //     ],


        // ]);
        // dd(DB::table('posts')->where('user_id', '=', '3')->get());
// update
        // DB::table('posts')->where('id',  '17')->update([
        //     'title' => 'test update',
        //     'content' => 'test update content',
        //     'status' => 1,
        //     'published_at' => now(),
        //     'user_id' => 17
        // ]);
        // return DB::table('posts')->where('id',  '17')->get();
// delete
        // // DB::table('posts')->where('id',  '17')->delete();
        // DB::table('posts')->delete(16);
        // dd('deleted');

// join table
        // return DB::table('posts')
        //     ->join('categories', 'posts.category_id', '=', 'categories.id')
        //     ->select('posts.*', 'categories.name as category_name')
        //     ->get();

// aggregates
        /**
         * count
         * max
         * min
         * avg
         * sum
         */
       return DB::table('posts')->sum('views');

    }
}
