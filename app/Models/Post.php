<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = array('title', 'content', 'status', 'user_id');
    public $timestamps = true;

    public function categories()
    {
        return $this->belongsTo('App\Category', 'categories_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}