<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTbConta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_conta', function(Blueprint $table)
		{
			$table->integer('id_centro_financeiro')->unsigned();
			$table->foreign('id_centro_financeiro')->references('id_centro_financeiro')->on('tb_centro_financeiro')->unique();
			$table->string('agencia', 45)->nullable();
			$table->string('numero', 45)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_conta');
	}

}
