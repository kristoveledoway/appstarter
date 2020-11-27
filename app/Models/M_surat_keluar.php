<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\M_surat_masuk;

class M_surat_keluar extends Model
{
    protected $table = 'data_surat_keluar';
    protected $primaryKey     = 'id_surat_keluar';

    public function __construct()
    {
        $this->Model_surat_masuk = new M_surat_masuk();
        helper(['text']);
    }

    public function surat_keluar_list()
    {
        $this->db->table('data_surat_keluar');
        $builder = $this->get();
        return $builder->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function get_surat_masuk($id_surat_masuk)
    {
        $query = $this->Model_surat_masuk->get_where(array('id_surat_masuk' => $id_surat_masuk));
        return $query;
    }

    public function hapus($id)
    {
        $this->where('id_surat_keluar', $id);
        $this->delete();
    }

    public function detail($id)
    {
        $this->where(array(
            'id_surat_keluar'        => $id
        ));
        $query = $this->get();
        return $query->getRowArray();
    }

    public function edit($data)
    {
        $this->where('id_surat_keluar', $data['id_surat_keluar']);
        $this->replace($data);
    }
}
