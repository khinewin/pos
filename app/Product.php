<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function cat(){
        return $this->belongsTo('App\Cat');
    }
}
