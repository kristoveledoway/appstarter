<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_masuk extends Model
{
    protected $table = 'data_surat_masuk';
    protected $primaryKey     = 'no_surat_masuk';


    function surat_masuk_list()
    {
        $builder = $this->db->table('data_surat_masuk');
        return $builder->get();
    }

    public function tambah($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function hapus($id)
    {
        $this->where('no_surat_masuk', $id);
        $this->delete();
    }

    public function detail($id)
    {
        $this->where(array(
            'no_surat_masuk'        => $id
        ));
        $query = $this->get();
        return $query->getRowArray();
    }

    public function edit($data)
    {
        $this->where('no_surat_masuk', $data['no_surat_masuk']);
        $this->replace($data);
    }
}
