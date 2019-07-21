<?php

namespace Wadahesam\LaravelBlogPlugin\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * returns the category of this post
     *
     * @return collection
     */
    public function category() {
        return $this->belongsTo(Category::class);
    }

    /**
     * returns the author of this post
     *
     * @return collection
     */
    public function author() {
        return $this->belongsTo(Author::class);
    }

    /**
     * returns the keywords of this post
     *
     * @return collection
     */
    public function keywords() {
        return $this->belongsToMany(Keyword::class);
    }
}
