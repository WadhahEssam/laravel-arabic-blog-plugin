# laravel-arabic-blog-plugin

currently this package supports arabic language only


a plugin for laravel applications that adds the ability to add arabic blogs to any existing project


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


(optional) publish the config/migrations/views :
```
php artisan vendor:publish --tag="blog-plugin:config"
php artisan vendor:publish --tag="blog-plugin:migration"
php artisan vendor:publish --tag="blog-plugin:views"
```

