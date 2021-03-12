<?php
namespace APP\Models;
use CodeIgniter\Model;
class mUsuarios extends Model{
	protected $table = 'usuario';
	protected $primarykey = 'Id_usuario';

	protected $useAutoIncrement= true;

	protected $returnType ='array';
	protected $UseSoftDeletes = true;

	protected $allowedFields= ['Nombre', 'Usuario', 'Email', 'Password'];

	protected $UseTimesstamps= false;
	protected $createdField = 'created_at';
	protected $updateField = 'updated_at';
	protected $deleteField = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages= [];
	protected $skipValidation = false;
}
?>