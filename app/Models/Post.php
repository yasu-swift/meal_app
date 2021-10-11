<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

        protected $fillable = [
        'title',
        'body',
    ];
    
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function likes()
    {
        return $this->belongsTo(like::class);
    }

        public function getImageUrlAttribute()
    {
        return Storage::url('images/posts/' . $this->image);
    }
}
