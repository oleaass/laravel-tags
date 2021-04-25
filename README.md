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
