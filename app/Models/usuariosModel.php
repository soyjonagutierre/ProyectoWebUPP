<?php namespace App\Models;

use CodeIgniter\Model;

class usuariosModel extends Model
{
	protected $table      = 'usuario';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'apellidos', 'edad', 'telefono', 'correoElectronico', 'username', 'contrasenia','id_rol'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function obtenerUsuario($data){
        $Usuario = $this->db->table(t_usuario);
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();

    }
}

