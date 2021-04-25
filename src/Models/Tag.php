<?php

namespace OleAass\Tags\Models;

use Illuminate\Database\Eloquent\Model;
use OleAass\Sluggable\Sluggable;

class Tag extends Model
{
    use Sluggable;

    protected $fillable = ['name'];

    public function getSlugOptions() : array
    {
        return [
            'source' => 'name'
        ];
    }
}
