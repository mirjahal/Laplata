<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTbCategoria extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_categoria', function(Blueprint $table)
		{
			$table->increments('id_categoria');
			$table->string('nome', 45);
			$table->integer('id_usuario')->unsigned();
			$table->foreign('id_usuario')->references('id_usuario')->on('tb_usuario');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_categoria');
	}

}
