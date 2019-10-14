# Routing and Views in laravel
------------------------------
Questions: How to make and manipulate routing and views?
Answer: After generating Laravel project we will get a bunch of directories and files under our generated project. Inside the 'routes' folder we will get a file named as 'web.php', inside of this file we can manipulate our routes and also able to add new routes. For making a route we have to write some codes as -
```php
    Route:get('/route', function(){
        return view('route');
    });
```
In this code we can see that the function is returning a view named as route which can be found inside of  'resources/views/route.blade.php' and in here we use blade as out templating language.