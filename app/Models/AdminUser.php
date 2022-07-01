<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminUser extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'email', 'password', 'nama', 'alamat', 'username', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function updateStatus($data, $id)
    {
        $query = $this->db->table('user')->update($data, array('id_user' => $id));
        return $query;
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table('user')->update($data, array('id_user' => $id));
        return $query;
    }

    public function deleteUser($id)
    {
        $query = $this->db->table('user')->delete(array('id_user' => $id));
        return $query;
    } 
}
