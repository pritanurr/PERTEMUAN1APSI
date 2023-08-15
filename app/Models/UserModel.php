<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  public function tambah($data)
  {
    return $this->db->table('user')->insert($data);
  }

  public function getUser($id_user)
  {
    return $this->where('id_user', $id_user)->first();
  }
  protected $table      = 'user';
  protected $primaryKey = 'id_user';
  protected $allowedFields = ['nama', 'askot', 'umur', 'role', 'email', 'password'];

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  public function cekData($email, $password, $role)
  {
    $builder = $this->db->table($this->table);
    $builder->where('email', $email);
    $builder->where('password', $password);
    $builder->where('role', $role);
    return $builder->countAllResults();
  }
  public function getUserByEmail($email)
  {
    // Mengasumsikan Anda menggunakan Database Query Builder CodeIgniter 4
    return $this->db->table('user')->where('email', $email)->get()->getRowArray();
  }
  public function countAdminUsers()
  {
    return $this->countAll();
  }
}
