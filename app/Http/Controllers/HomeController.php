<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        //    return DB::table('posts')->sum('views');

// access data from model
        // return Post::all();
        // return Post::find(10);
        // return $post->content;
        // $post = Post::all();

        // foreach ($post as $post) {
        //     echo $post->title;
        // }

// Eloquent where
        // return Post::where('views','>', 400)->get();
        // return Post::where('views','>', 400)->orWhere('category_id', '1')->get();

// update | saving data | Delete
        // $post = new Post();
        // $post->title = 'test';
        // $post->content = 'test content';
        // $post->status = 1;
        // $post->published_at = now();
        // $post->user_id = 3;
        // $post->category_id = 1;
        // $post->views = 777;
        // $post->save();
        // dd($post);

        // $post = Post::where('id', 5)->first();
        // $post->title = 'test update';
        // $post->content = 'test update';
        // $post->save();
        // dd($post);

        // $post = Post::find(3);
        // $post->delete();
        // dd('deleted');

        // $post = Post::where('id', 5)->first();
        // $post->title = 'test update';
        // $post->content = 'test update';
        // $post->save();

        // $post = Post::create([
        //     'title' => 'test create deh' ,
        //     'content' => 'test create content deh' ,
        //     'status' => 1,
        //     'published_at' => now(),
        //     'user_id' => rand(1, 10),
        //     'category_id' => rand(1, 3),
        //     'views' => rand(300, 1000),
        // ]);

        $post = Post::where('id', 5)->update([
            'title' => 'test update deh' ,
            'content' => 'test update content deh' ,
            'views' => rand(300, 1000),
        ]);

        dd('anjay');
    }
}
