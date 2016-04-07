<?php

Route::group(['middleware' => 'web'], function () {

    Route::get('/', ['as' => 'accueil', function(){
        return view('accueil');
    }]);

    Route::get('contact', ['as' => 'contactus', function(){
        return view('contact.contact');
    }]);

    Route::get('about', ['as' => 'about', function(){
        return view('about');
    }]);

    Route::auth();

    Route::group(['namespace' => 'Admin' ,'prefix' => 'admin'], function(){
        route::resource('posts', 'PostsController');
        route::get('posts/validate', ['as' => 'admin.posts.valid', 'uses' => 'PostsController@valid']);
    });

    Route::resource('posts', 'PostsController');
});

