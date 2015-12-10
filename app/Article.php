<?php

namespace App;

use Carbon\Carbon;
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

    protected $dates = ['published_at'];    // Create Carbon instance of published_at

    /**
     * Scope: Published
     * Display only published posts.
     *
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * Scope: Unpublished
     * Display only unpublished posts.
     *
     * @param $query
     */
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    /**
     * Mutator: Published At
     * Changes the $date instance to a Carbon instance before entering into the database.
     *
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        if ($date == date('Y-m-d')) :
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        else:
            $this->attributes['published_at'] = Carbon::parse($date);
        endif;
    }
}
