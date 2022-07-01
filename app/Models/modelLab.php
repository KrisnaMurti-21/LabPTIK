<?php

namespace App\Models;

use CodeIgniter\Model;

class modelLab extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lab';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

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

    // function TampilLabRPL() 
    // {
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('lab'); 
    //     // $builder->select('userid','username');       // names of your columns
    //     $builder->where('id_lab', 1);                // where clause
    //     $query = $builder->get();

    //     return $query;
    // }

    public function updateStatusLab($data, $id)
    {
        $query = $this->db->table('lab')->update($data, array('id' => $id));
        return $query;
    }
}
