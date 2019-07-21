
<?php
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Keyword;

Route::get('something', function() {
  return Keyword::all()[0]->posts;
});

Route::get('add/{a}/{b}', 'DashboardController@add');
Route::get('subtract/{a}/{b}', 'DashboardController@subtract');