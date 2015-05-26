<?php

class UsuarioControllerTest extends TestCase
{
	
	private $usuarioModel;
	
	public function setUp()
	{
		parent::setUp();
		
		$this->usuarioModel = Mockery::mock('App\Models\Usuario');
	}

    /**
     * Testa o cadastro de usuário.
     * 
     * @test
     */
    public function testSalvar()
    {
    	$dados = [
			'nome' => 'José Almir',
    		'sobrenome' => 'do Nascimento Júnior',
    		'email' => 'mirjahal@hotmail.com',
    		'senha' => Hash::make('123456'),
    		'status' => 'A'
    	];
    	
    	$this->usuarioModel->shouldReceive('create')->once()->with($dados);
    	$this->app->instance('App\Models\Usuario', $this->usuarioModel);
    	
        $response = $this->call('POST', '/usuario', $dados);

        $this->assertRedirectedTo('usuario', ['mensagem' => 'Usuário salvo com sucesso.']);
    }
}
