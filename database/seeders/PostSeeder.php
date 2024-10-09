<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 10; $i++) { 
            DB::table('posts')->insert([
                'title' => Str::random(20),
                'content' => Str::random(100),
                'status' => 1,
                'published_at'=> date('Y-m-d H:i:s'),
                'user_id'=> 1,
                'category_id'=> (rand(1,3)),
                'views'=> (rand(1,1000)),
            ]);
        }
        
    }
}
