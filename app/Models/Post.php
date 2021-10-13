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
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function getImagePathAttribute()
    {
        return 'images/posts/' . $this->image;
    }

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }
    
}
