<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => 'admin'], function(){

Route::resource('user','userController');
Route::get('user/{id}/destroy',[
   'uses'=>'userController@destroy',
   'as'=> 'admin/user/destroy'

	]);
});

Route::group(['prefix'=>'gente'],function(){
	Route::get('gentes/{id}/destroy',[
     'uses' => 'gentecontroller@destroy',
     'as' => 'gente/gentes/destroy'
		]);
    Route::resource('gentes','gentecontroller');


});
