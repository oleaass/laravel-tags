# Add tags to Eloquent models in Laravel

This package allows you to easily add tags to any Eloquent model you have in your Laravel application

```php
$post = \App\Models\Post::create([
    'title' => 'My first post'
]);

$tag = \OleAass\Tags\Models\Tag::create([
    'name' => 'My tag'
]);

$post->tags()->attach([$tag->id]);
```

## Installation

```
$ composer require oleaass/laravel-tags
$ php artisan migrate # This will create two new database tables 'tags' & 'taggables'
```

## Add tags to your Eloquent model

```php
namespace App\Models;

use OleAass\Tags\Taggable;

class Post extends Model
{
    use Taggable;
}
```

## Support Me

I spend my free time making packages. So if you want to support me and my work,
I would really appreciate if you bough me a coffee.

<a href="https://www.buymeacoffee.com/oleaass" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>