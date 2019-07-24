

<?php

Route::get('/', 'PublicSiteController@showHomePage');

Route::get('test', function() {
  return 'test';
});