# Personal Blog Project 
A simple blog project created with laravel php. 
    
## Config
The user.php file on the app folder is a model. as laravel follows the MVC concept so user.php behaves as a model.the controllers are in the: 
```
    app>http>controllers folder
```
The views are in the resources folder all the views uses the blade template engine. How views work, the pages to view are all in the web.php or we can say on the routes folder.
we just return a page here. like we return the view here and it just serches the 
desired function on the views folder. 

* To add the migration we can simply put this command
```php
php artisan make:migration add_user_to_posts
```

* To view the timestamp and the user who created this post, 
> we need to make sure we have a model, which indicates the relationship between the post and the user.
```php
<small>Created on {{$post->created_at}} by {{$post->user->name}}</small>
```


    


