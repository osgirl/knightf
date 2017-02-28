<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Volunteer extends Model
{
		use SoftDeletes;
        protected $fillable = [
            'event_id',
            'name',
               ];


       public function event(){
        return $this->belongsTo('App\Event');
    }
}
