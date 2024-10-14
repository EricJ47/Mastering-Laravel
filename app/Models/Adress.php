<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id');
    }
}
