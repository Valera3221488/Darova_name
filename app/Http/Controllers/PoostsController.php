<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poost;
use App\Repositories\Poosts;
use Carbon\Carbon;


class PoostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(Poosts $posts){


       $posts=$posts->all();

      // $posts=Poost::latest()
      // ->filter(request(['month','year']))
      //  ->get();






        return view('posts.index',compact('posts','archives'));
    }

    public function show(Poost $post){

        return view('posts.show',compact('post'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);

        auth()->user()->publish(
            new Poost(request(['title','body']))
        );
        session()->flash('message','Your post now has been published');


    return redirect('/');
    }
}
