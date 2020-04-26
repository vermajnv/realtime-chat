<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
    public function userable()
    {
        return $this->morphTo();
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
