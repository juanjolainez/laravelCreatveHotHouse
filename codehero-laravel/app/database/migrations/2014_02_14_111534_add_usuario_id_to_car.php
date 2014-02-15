<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuarioIdToCar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('carros', function($table){
			$table->integer('usuario_id');
			$table->foreign('usuario_id')->references('id')->on('usuarios');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('carros', function($table){
			$table->dropColumn('usuario_id');
			$table->dropForeign('carros_usuario_id_foreign');
		});	
	}

}
