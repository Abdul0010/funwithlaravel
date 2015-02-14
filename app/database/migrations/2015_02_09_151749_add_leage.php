<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLeage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
		DB::table('leage')->insert(array(
		'name'=>'English',
		 'level'=>'1',
		'Created_at'=>date('Y-m-d H:m:s'),
		'updated_at'=>date('Y-m-d H:m:s'),
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('leage')->where('name','=','English')->delete();
	}

}
