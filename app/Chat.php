<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['message'];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
