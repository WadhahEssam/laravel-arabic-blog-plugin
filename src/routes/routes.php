
<?php
use Wadahesam\LaravelBlogPlugin\Model\Post;

Route::get('something', function() {
  return Post::all()[1]->author;
});

Route::get('add/{a}/{b}', 'DashboardController@add');
Route::get('subtract/{a}/{b}', 'DashboardController@subtract');