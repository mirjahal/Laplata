<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTbCartao extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_cartao', function(Blueprint $table)
		{
			$table->integer('id_centro_financeiro')->unsigned();
			$table->foreign('id_centro_financeiro')->references('id_centro_financeiro')->on('tb_centro_financeiro')->unique();
			$table->tinyInteger('dia_fechamento_fatura', false, true);
			$table->tinyInteger('dia_vencimento_fatura', false, true);
			$table->decimal('valor_limite', 10, 2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_cartao');
	}

}
