<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminFasilitas extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'fasilitas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'ruangan', 'nama_barang', 'gambar', 'jumlah'];

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

    public function SimpanFasilitas($data)
    {
        return $this->db->table('fasilitas')->insert($data);
    }

    public function updateFasilitas($data, $id)
    {
        $query = $this->db->table('fasilitas')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteFasilitas($id)
    {
        $query = $this->db->table('fasilitas')->delete(array('id' => $id));
        return $query;
    } 
}
