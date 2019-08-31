<?php

namespace Wadahesam\LaravelBlogPlugin\Model;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $table = 'bkeywords';

    /**
     * returns the keywords of this post
     *
     * @return collection
     */
    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
