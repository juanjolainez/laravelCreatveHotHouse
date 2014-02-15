<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdToArticulosAndComents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articulos', function($table){
			$table->increments('id');
		});

		Schema::table('coments', function($table){
			$table->increments('id');
		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articulos', function($table){
			$table->dropColumn('id');
		});
		
		Schema::table('coments', function($table){
			$table->dropColumn('id');
		});
		
	}

}
