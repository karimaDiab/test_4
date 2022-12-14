<?php

namespace App\Models;

use CodeIgniter\Model;

class Test_model extends Model
{
    protected $table      = 'aa_test';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct()
    {
        $this->db = \Config\Database::connect();

    }
    public function find_data($id)
    {
        $query = $this->db->table('user')->get();

        // foreach ($res as $row) {
        //     echo $row->name;
        // }
        return $query->getResult();
    }

    public function insert_data($data)
    {
       //print_r('in model');exit;
        return $this->db->table('aa_test')->insert($data);
    }
    public function edit_data($data)
    {
       
        return $this->db->table('aa_test')->update($data);
    }
 
}