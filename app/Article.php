<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Fillable Fields
     */
    protected $fillable = [
        'title',
        'body',
        'published_at',
    ];

    public function setPublishedAtAttribute($date)
    {
        if ($date == date('Y-m-d')) :
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        else:
            $this->attributes['published_at'] = Carbon::parse($date);
        endif;
    }
}
