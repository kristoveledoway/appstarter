<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'data_user';
    protected $primaryKey     = 'id';


    function user_list()
    {
        $builder = $this->db->table('data_user');
        return $builder->get();
    }

    public function tambah($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function hapus($id)
    {
        $this->where('id', $id);
        $this->delete();
    }

    public function detail($id)
    {
        $this->where(array(
            'id'        => $id
        ));
        $query = $this->get();
        return $query->getRowArray();
    }

    public function edit($data)
    {
        $this->where('id', $data['id']);
        $this->replace($data);
    }
}
