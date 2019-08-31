# laravel-arabic-blog-plugin
a plugin for laravel applications that adds the ability to add arabic blogs to any existing project

currently this package supports arabic language only



installing the package :
```
composer require wadahesam/laravel-arabic-blog-plugin
```


after setting up the database , run :
```
php artisan migrate
```


publish the resources of the package :
```
php artisan vendor:publish --tag=public --force
```


(optional) publish the config/migrations/views/routes :
```
php artisan vendor:publish --tag="blog-plugin:config" --force 
php artisan vendor:publish --tag="blog-plugin:migrations" --force
php artisan vendor:publish --tag="blog-plugin:views" --force
php artisan vendor:publish --tag="blog-plugin:routes" --force
```


you are ready to go now

visit ( /admin ) to go to the dashboard
visit ( /posts ) to go to the posts page

you can edit those routes from the config file

