<?php

namespace App\Repositories;
use App\Poost;
use App\Redis;
class Poosts
{
    protected $redis;
    public function __construct(Redis $redis)
    {
        $this->redis=$redis;


    }

    public function all()
    {

        return Poost::all();
    }


}