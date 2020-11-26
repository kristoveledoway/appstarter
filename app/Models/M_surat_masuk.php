<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_masuk extends Model
{
    protected $table = 'data_surat_masuk';
    protected $primaryKey     = 'id_surat_masuk';


    function surat_masuk_list()
    {
        $this->db->table('data_surat_masuk');
        $builder = $this->get();
        return $builder->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function hapus($id)
    {
        $this->where('id_surat_masuk', $id);
        $this->delete();
    }

    public function detail($id)
    {
        $this->where(array(
            'id_surat_masuk'        => $id
        ));
        $query = $this->get();
        return $query->getRowArray();
    }

    public function edit($data)
    {
        $this->where('id_surat_masuk', $data['id_surat_masuk']);
        $this->replace($data);
    }
}
