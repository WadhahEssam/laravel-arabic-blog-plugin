
<?php

Route::get('something', function() {
  return 'this is a test for the package that i am trying to make';
});

Route::get('add/{a}/{b}', 'DashboardController@add');
Route::get('subtract/{a}/{b}', 'DashboardController@subtract');