<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
			return redirect('categoria');
		}
		
		return redirect('/');
	}
}
