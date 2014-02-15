<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carros', function($table)
                {
                        $table->increments('id');

                        $table->string('modelo')->nullable();
                        $table->string('placa',11)->nullable();
                        $table->integer('ano')->nullable();
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
		Schema::drop('carros');
	}

}
