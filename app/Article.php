<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Fillable Fields
    protected $fillable = [
        'title',
        'body',
        'published_at',
    ];
}
