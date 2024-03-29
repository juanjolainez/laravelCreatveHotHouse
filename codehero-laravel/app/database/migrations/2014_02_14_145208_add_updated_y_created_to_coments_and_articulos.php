<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUpdatedYCreatedToComentsAndArticulos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articulos', function($table){
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});

		Schema::table('coments', function($table){
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
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
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
		});
		
		Schema::table('coments', function($table){
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
		});
	}

}
