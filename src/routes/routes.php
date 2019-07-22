
<?php
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Keyword;

Route::redirect('/', 'admin/posts'); // redirect to the posts page when the user enters the dashboard ( could be changed later )
Route::post('uploadImage', 'DashboardController@uploadImage');
Route::resource('/posts', 'PostController');

Route::get('test', function() {
  return Keyword::all()[0]->posts;
});