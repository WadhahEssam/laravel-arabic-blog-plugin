
<?php
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Keyword;

Route::get('/', 'DashboardController@showDashboard')->name('showDashboard');
Route::get('something', function() {
  return Keyword::all()[0]->posts;
});