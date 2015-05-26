<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTbCentroFinanceiro extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_centro_financeiro', function(Blueprint $table)
		{
			$table->increments('id_centro_financeiro');
			$table->integer('id_usuario')->unsigned();
			$table->foreign('id_usuario')->references('id_usuario')->on('tb_usuario');
			$table->string('nome', 45);
			$table->char('cor', 7);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_centro_financeiro');
	}

}
