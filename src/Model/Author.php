<?php

namespace Wadahesam\LaravelBlogPlugin\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'bauthors';
    
    /**
     * returns the posts that this author has 
     *
     * @return collection
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
