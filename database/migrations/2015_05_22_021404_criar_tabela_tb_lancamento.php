<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTbLancamento extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_lancamento', function(Blueprint $table)
		{
			$table->increments('id_lancamento');
			$table->integer('id_categoria')->unsigned();
			$table->foreign('id_categoria')->references('id_categoria')->on('tb_categoria');
			$table->integer('id_centro_financeiro')->unsigned();
			$table->foreign('id_centro_financeiro')->references('id_centro_financeiro')->on('tb_centro_financeiro');
			$table->date('data');
			$table->char('tipo', 1); //Débito (D) - Crédito (C)
			$table->char('consolidado', 1); //Sim (S) - Não (N)
			$table->decimal('valor', 10, 2);
			$table->string('descricao', 255)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_lancamento');
	}

}
