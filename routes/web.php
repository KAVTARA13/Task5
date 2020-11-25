<?php

Route::get('/',"PostsController@index")->name('index');

Route::get('/create',"PostsController@create")->name('create');
Route::post('/store',"PostsController@store")->name('store');

Route::post('/delete',"PostsController@delete")->name('delete');

Route::get('/edit/{id}',"PostsController@edit")->name("edit");
Route::post('/update',"PostsController@update")->name("update");

Route::get('/post/{id}',"PostsController@post")->name("post");

Route::post('/comments',"PostsController@comment")->name("comment");