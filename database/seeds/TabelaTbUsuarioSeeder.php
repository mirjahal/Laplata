<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class TabelaTbUsuarioSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        DB::table('tb_usuario')->delete();

        Usuario::create([
            'nome' => 'José Almir',
            'sobrenome' => 'do Nascimento Júnior',
            'email' => 'mirjahal@hotmail.com',
            'senha' => Hash::make('123456'),
            'status' => 'A'
        ]);
    }

}
