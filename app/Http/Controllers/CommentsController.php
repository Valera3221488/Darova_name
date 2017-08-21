<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poost;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Poost $post){

        $this->validate(request(),['body'=>'required']);

    $post->addComment(request('body'));

        return back();//the same as redirect to the previous page
    }
}
