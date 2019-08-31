<?php

namespace Wadahesam\LaravelBlogPlugin\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'bcategories';

    /**
     * returns the posts that belongs to this category
     *
     * @return collection
     */
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
