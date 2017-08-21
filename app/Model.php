<?php
/**
 * Created by PhpStorm.
 * User: Beselmonster
 * Date: 01.08.2017
 * Time: 2:20
 */

namespace App;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{

    protected $fillable =['title','body','user_id'];


}