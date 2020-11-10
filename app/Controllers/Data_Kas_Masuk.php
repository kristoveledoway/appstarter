<?php

namespace App\Controllers;
use App\Models\M_kas_masuk;

class Data_Kas_Masuk extends BaseController
{
    public function index()
    {
        //$model = new M_kas_masuk();
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM data_kas WHERE jenis_kas = 'masuk'");
        $data['kas_masuk'] = $query->getResult();
        $mb     = new M_kas_masuk();
        $data['totaljumlah'] = $mb->hitungjumlah();
        return view('data_kas_masuk/index', $data);
    }

    public function tambah()
    {
        $validated =  $this->validate([
            'keterangan'          => 'required',
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'kode'          => $this->request->getVar('kode'),
                'keterangan'    => $this->request->getVar('keterangan'),
                'tgl'           => $this->request->getVar('tgl'),
                'jumlah_masuk'  => $this->request->getVar('jumlah_masuk'),
                'jenis'         => $this->request->getVar('jenis'),
                'jenis_kas'     => "masuk",
                'jumlah_keluar' => 0
            );
            $model = new M_kas_masuk();
            $model->tambah($data);
            return redirect()->to(base_url('data_kas_masuk'));
            // End masuk database
        }
        return view('data_kas_masuk/tambah');
    }

    public function detail($id)
    {
        $mb     = new M_kas_masuk();
        $users  = $mb->detail($id);
        $data = array(
            'users'    => $users
        );
        return view('data_kas_masuk/detail', $data);      
    }

    public function edit($id)
    {
        $mb     = new  M_kas_masuk();
        $users  = $mb->detail($id);

        $validated =  $this->validate([
            'keterangan'          => 'required',
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'kode'          => $this->request->getVar('kode'),
                'keterangan'    => $this->request->getVar('keterangan'),
                'tgl'           => $this->request->getVar('tgl'),
                'jumlah_masuk'  => $this->request->getVar('jumlah_masuk'),
                'jenis'         => $this->request->getVar('jenis'),
                'jenis_kas'     => "masuk",
                'jumlah_keluar' => 0
            );
            $model = new M_kas_masuk();
            $model->edit($data);
            return redirect()->to(base_url('data_kas_masuk'));
            // End masuk database
        }

        $data   = array (
            'users' => $users
        );
        return view('data_kas_masuk/edit', $data);
    }

    public function delete($id)
    {
        $model     = new M_kas_masuk();
        $kategori = $model->hapus($id);
        return redirect()->to(base_url('data_kas_masuk'));
    }
}
