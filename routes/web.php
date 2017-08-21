<?php

    Route::get('/','PoostsController@index')->name('home');

    Route::get('/posts/create','PoostsController@create');

    Route::get('/posts/{post}','PoostsController@show');

    Route::get('/posts/tags/{tag}','TagController@index');

    Route::post('/posts','PoostsController@store');

    Route::post('/posts/{post}/comments','CommentsController@store');

    Route::get('/register','RegistrationController@create');

    Route::post('/register','RegistrationController@store');

    Route::get('/login','SessionsController@create');

    Route::post('/login','SessionsController@store');

    Route::get('/logout','SessionsController@destroy');


