<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    protected $guarded = [];

    public function path()
    {
        return sprintf('/books/%s-%s', $this->id, Str::slug($this->title));
    }
}
