<?php
class PlayersController extends Base_Controller{
public $restful=true;
public function get_index(){
return View::make('players.index');

}

}