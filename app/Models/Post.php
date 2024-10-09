<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
// fillable &  guarded
    protected $table = 'posts'; 

    protected $fillable = [
        'title',
        'content',
        'status',
        'published_at',
        'user_id',
        'category_id',
        'views',
    ];

    // protected $guarded = [
    //     'id',
    // ];
}
