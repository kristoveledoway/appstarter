<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kas_keluar extends Model
{
    protected $table = 'data_kas';
    protected $primaryKey     = 'kode';

    public function hitungkeluar()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('data_kas');
        $builder->selectSum('jumlah_keluar');
        $query = $builder->get();
        if ($query->getRowArray() > 0) {
            return $query->getRow()->jumlah_keluar;
        } else {
            return 0;
        }
    }

    public function totalsuratkeluar()
    {
        return $this->db->table('data_surat_keluar')->countAll();
    }

    function kas_keluar_list()
    {
        $builder = $this->db->table('data_kas');
        return $builder->get();
    }

    public function tambah($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function hapus($id)
    {
        $this->where('kode', $id);
        $this->delete();
    }

    public function detail($id)
    {
        $this->where(array(
            'kode'        => $id
        ));
        $query = $this->get();
        return $query->getRowArray();
    }

    public function edit($data)
    {
        $this->where('kode', $data['kode']);
        $this->replace($data);
    }
}
