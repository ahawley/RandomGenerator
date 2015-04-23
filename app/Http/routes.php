<?php

Route::get('/','SweetController@getHomePage');

Route::get('/people', 'SweetController@getPeople');
Route::post('/people','SweetController@postPeople');

Route::get('/text', 'SweetController@getText');
Route::post('/text','SweetController@postText');