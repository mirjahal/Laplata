<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Carbon\Carbon;

class AutenticacaoController extends Controller
{
	
	public function index()
	{
		return view('autenticacao.login');
	}
	
	public function login(Request $request)
	{
		$condicao = ['email' => $request->get('email'), 'password' => $request->get('senha'), 'status' => 'A'];
		
		if (Auth::attempt($condicao)) {
		    $usuarioLogado = Auth::user();
		    $usuarioLogado->data_ultimo_acesso = Carbon::now();
		    $usuarioLogado->save();
		    
			return redirect('categoria');
		}
		
		return redirect('/');
	}
	
	public function logout()
	{
	    Auth::logout();
	    return redirect('/');
	}
}
