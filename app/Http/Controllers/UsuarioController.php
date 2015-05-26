<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\View;

class UsuarioController extends Controller
{
	
	private $usuario;
	
	public function __construct(Usuario $usuario)
	{
		$this->usuario = $usuario;
	}
	
	public function index()
	{
		return 'index';
	}
	
	public function cadastrar()
	{
		return 'cadastrar';
	}
	
	public function salvar(Request $request)
	{
		$dados = [
			'nome' => $request->get('nome'),
			'sobrenome' => $request->get('sobrenome'),
			'email' => $request->get('email'),
			'senha' => $request->get('senha'),
			'status' => $request->get('status')
		];

		$this->usuario->create($dados);
		
		return redirect('usuario')->with('mensagem', 'Usuário salvo com sucesso.');
	}
	
	public function visualizar($idUsuario)
	{
		return 'visualizar-' . $idUsuario;
	}
	
	public function editar($idUsuario)
	{
		return 'editar-' . $idUsuario;
	}
	
	public function atualizar($idUsuario)
	{
		return 'atualizar-' . $idUsuario;
	}
	
	public function excluir($idUsuario)
	{
		'excluir-' . $idUsuario;
	}
}