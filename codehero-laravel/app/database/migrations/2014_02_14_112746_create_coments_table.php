<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coments', function($table)
		{
			$table->text('text');
			$table->integer('usuario_id');
			$table->foreign('usuario_id')->references('id')->on('usuarios');
			$table->integer('articulo_id');
			$table->foreign('articulo_id')->references('id')->on('articulos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coments');
	}

}
