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
        'user_id',
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

    /**
     * An article is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the tags associated with the given article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the current article.
     *
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }
}
