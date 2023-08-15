<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visit';
    protected $primaryKey = 'id';
    protected $allowedFields = ['age_range', 'latitude', 'longitude']; // Menambahkan kolom latitude dan longitude

    protected $useTimestamps = true; // Jika Anda menggunakan timestamp (misalnya, created_at, updated_at)

    protected $useSoftDeletes = false;

    protected $casts = [
        'latitude' => 'decimal:9,6', // Tipe data DECIMAL dengan panjang dan presisi yang sesuai
        'longitude' => 'decimal:9,6',
    ];
    public function tambah($data)
    {
        return $this->db->table('visit')->insert($data);
    }

    // ...
    public function countVisitor()
    {
        return $this->countAll();
    }
}
