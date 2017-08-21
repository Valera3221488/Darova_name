<?php

namespace App;



class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Poost::class);

    }
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    protected $fillable = ['poost_id','body','user_id'];
}
