
<?php
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Keyword;

Route::get('/', 'DashboardController@showPostsMenu')->name('showPostsMenu');

Route::get('test', function() {
  return Keyword::all()[0]->posts;
});