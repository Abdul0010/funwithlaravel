<?php


Route::get('/', array('as'=>'home','uses'=>'HomeController@getIndex'))->before('auth');

Route::get('/login', array('as'=>'login','uses'=>'LoginController@getLogin'))->before('guest');

Route::post('login',array('uses'=>'LoginController@postLogin'))->before('csrf');
