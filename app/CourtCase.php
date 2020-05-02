<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourtCase extends Model
{
    protected $table = 'cases';
    public function userable()
    {
        return $this->morphTo();
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
