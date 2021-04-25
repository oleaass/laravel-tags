<?php

namespace OleAass\Tags;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use OleAass\Tags\Models\Tag;

trait Taggable
{
    public function tags() : MorphToMany
    {
        return $this->morphToMany(Tag::class, 'model', 'taggables');
    }
}
