<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlayer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('players')->insert(array(
		'name'=>'messi',
		'country'=>'Argentina',	
		));
		DB::table('players')->insert(array(
		
	'name'=>'C.ronaldo',
	'country'=>'Portugal',		
		
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('players')->where('name','=','messi')->delete();
				DB::table('players')->where('name','=','C.ronaldo')->delete();

	}

}
