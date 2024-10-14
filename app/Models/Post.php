<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
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

    public function category() 
    {
        return $this->belongsTo(Category::class);
        
    }

    public function tags()  
    {
        return $this->belongsToMany(Tag::class);
        
    }
}
