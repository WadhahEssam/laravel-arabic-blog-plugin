

<?php
Route::get('/', 'PublicSiteController@showHomePage');
Route::get('/post/{id}', 'PublicSiteController@showPostPage');

Route::get('test', function() {
  return 'test';
});