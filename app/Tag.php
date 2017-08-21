<?php

namespace App;



class Tag extends Model
{
    public function posts(){
        return $this->belongsToMany(Poost::class);
    }
    public function getRouteKeyName(){

        return 'name';
    }

}
