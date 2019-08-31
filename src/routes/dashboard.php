<?php
use Wadahesam\LaravelBlogPlugin\Model\Post;
use Wadahesam\LaravelBlogPlugin\Model\Category;
use Wadahesam\LaravelBlogPlugin\Model\Author;
use Wadahesam\LaravelBlogPlugin\Model\Keyword;


Route::middleware(config('blog-plugin.guard'))->group(function () {
  Route::redirect('/', config('blog-plugin.prefix').'/posts'); // redirect to the posts page when the user enters the dashboard ( could be changed later )
  Route::post('uploadImage', 'DashboardController@uploadImage');
  Route::resource('/posts', 'PostController');
  Route::resource('/categories', 'CategoryController');
  Route::resource('/authors', 'AuthorController');
});