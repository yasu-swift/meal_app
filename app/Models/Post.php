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

    public function getElapsedTime($createdTime)
    {
        $elapsedTime = strtotime(date('Y-m-d H:i:s'))  - strtotime($createdTime);

        if ($elapsedTime < 60) {
            return $elapsedTime . '秒';
        } elseif ($elapsedTime < 3600) {
            return floor($elapsedTime / 60) . '分';
        } elseif ($elapsedTime < 86400) {
            return floor($elapsedTime / (60 * 60)) . '時間';
        } elseif ($elapsedTime < 2592000) {
            return floor($elapsedTime / (60 * 60 * 24)) . '日';
        } elseif ($elapsedTime < 31536000) {
            return floor($elapsedTime / (60 * 60 * 24 * 30)) . '月';
        } else {
            return floor($elapsedTime / (60 * 60 * 24 * 365)) . '年';
        }
    }
}
