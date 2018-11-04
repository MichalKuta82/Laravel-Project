<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
    	'category_id', 'photo_id', 'title', 'body', 'slug'
    ];

    use Sluggable;
    public function sluggable() {
        return [
            'slug' => [
                'source'         => 'title',
                'separator'      => '-',
                'includeTrashed' => true,
            ]
        ];
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function photo()
    {
    	return $this->belongsTo('App\Photo');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
