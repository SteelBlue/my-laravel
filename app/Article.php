<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Fillable fields for an Article.
     *
     * @var array
     **/
    protected $fillable = [
        'title',
        'body',
        'published_at',
    ];

    /**
     * Additional fields to treat as Carbon instances.
     *
     * @var array
     **/
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
     * Scope queries to articles that have been published.
     *
     * @param $query
     */
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    /**
     * Set the published_at attribute.
     * Change to Carbon instance before entering into the database.
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
