<?php

namespace Wadahesam\LaravelBlogPlugin\Model;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    /**
     * returns the posts that has this keyword
     *
     * @return collection
     */
    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
