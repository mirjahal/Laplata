@extends('template.main')

@section('title', 'Login')

@section('content')
	<div id="login" class="large-5 small-10 large-centered small-centered columns">
		<div class="panel">
			<h4>Login</h4>
			
			<hr>
		
			<form method="post" action="autenticacao/login">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<div class="row">
					<div class="large-12 columns">
						<label>
							E-mail
							<input type="text" name="email" />
						</label>
					</div>
				</div>
				
				<div class="row">
					<div class="large-12 columns">
						<label>
							Senha
							<input type="password" name="senha" />
						</label>
					</div>
				</div>
				
				<div class="row">
					<div class="large-12 columns">
						<button class="small left radius">Entrar</button>
						<a href="#" class="right">Esqueci a senha</a>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop
