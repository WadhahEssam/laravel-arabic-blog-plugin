

<?php
Route::get('/', 'PublicSiteController@showHomePage');
Route::get('/post/{id}', 'PublicSiteController@showPostPage');
Route::get('/keyword/{keyword}', 'PublicSiteController@showPostsWithKeyword');

Route::get('test', function() {
  return 'test';
});