<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use TranslatableContract;

class Court extends Model implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['title', 'description'];
}
