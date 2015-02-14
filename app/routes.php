<?php


Route::get('/', array('as'=>'home','uses'=>'HomeController@getIndex'))->before('auth');

Route::get('/login', array('as'=>'login','uses'=>'LoginController@getLogin'))->before('guest');

Route::post('login',array('uses'=>'LoginController@postLogin'))->before('csrf');
Route::get('players',array('uses'=>'PlayersController@index'));
Route::get('/player{barca}',function($barca){
	
    $data['barca']=$barca;
	return View::make('player',$data);

});
	Route::get('custom/response',function(){
	return Response::make('hi there',200);
	$response->header->set('our key','our value');
		return $response;
	});
Route::filter('birthday',function(){
if(date('d/m/y')=='12/12/99'){
return View::make('birthday');
}


});
Route::get('/quiz',function(){
return View::make('quzi.index');

});