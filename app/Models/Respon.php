<?php

namespace App\Models;

use CodeIgniter\Model;

class Respon extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'respon';
    protected $primaryKey       = 'id_respon';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'rating', 'gedung', 'kritik'];

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

    public function countRespon()
    {
        // var_dump(session()->get('role'));
        if (session()->get('role') == '1') {
            return $this->countAllResults();
        } elseif (session()->get('role') == '2') {
            $gedung = 'Agroindustri';
        } elseif (session()->get('role') == '3') {
            $gedung = 'Keperawatan';
        } elseif (session()->get('role') == '4') {
            $gedung = 'TPPM';
        } else {
            $gedung = 'JMI';
            return $this->countAll();
        }
        // var_dump(session()->get('role'));
        // die();
        return $this->where('gedung', $gedung)->countAllResults();
    }
    public function countResponByBuilding($buildingName)
    {
        return $this->where('gedung', $buildingName)->countAllResults();
    }
}
