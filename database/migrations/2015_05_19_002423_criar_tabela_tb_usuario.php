<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTbUsuario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_usuario', function(Blueprint $table)
		{
			$table->increments('id_usuario');
			$table->string('nome', 45);
			$table->string('sobrenome', 45)->nullable();
			$table->string('email', 45)->unique();
			$table->string('senha', 255);
			$table->dateTime('data_ultimo_acesso')->nullable();
			$table->char('status', 1); //Ativo (A) - Inativo (I) - Trocar senha (T)
			$table->string('token', 100)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_usuario');
	}

}
