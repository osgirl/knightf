<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
          protected $fillable = [
   			'title',
   			'start_date',
            'body'
        ];

    public function volunteers(){
        return $this->hasMany('App\Volunteer');
    }
}
