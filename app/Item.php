<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function cat(){
        return $this->belongsTo('App\Cat','category_id');
    }
}
