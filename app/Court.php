<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use TranslatableContract;

class Court extends Model implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['title', 'description'];
    public $fillable = ['court_type_id', 'state_id', 'city_id'];

    public function courtType()
    {
        return $this->belongsTo('App\CourtType', 'court_type_id');
    }
}
