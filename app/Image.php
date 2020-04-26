<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    $guard = [];

    public function imageable()
    {
        return $this->morphTo();
    }
}
