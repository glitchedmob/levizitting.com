<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'image' ,'body', 'published'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function published()
    {
        return static::where('published', true);
    }

    public static function recent($limit = 5)
    {
        return static::published()
            ->latest()
            ->limit($limit)
            ->get(['id', 'title', 'slug']);
    }

    public  static function popular($limit = 5)
    {
        return static::published()
            ->orderBy('view_count', 'desc')
            ->limit($limit)
            ->get(['id', 'title', 'slug']);
    }

}
