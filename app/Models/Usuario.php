<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends Model implements Authenticatable
{
	
	protected $table = 'tb_usuario';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;
	protected $guarded = ['id_usuario'];
	
	public function getAuthIdentifier()
	{
		return $this->primaryKey;
	}
	
	public function getAuthPassword()
	{
		return $this->senha;
	}
	
	public function getRememberToken()
	{
		return '';
	}
	
	public function setRememberToken($value)
	{
		
	}
	
	public function getRememberTokenName()
	{
		return '';
	}
}
