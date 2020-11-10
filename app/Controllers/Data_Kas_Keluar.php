<?php

namespace App\Controllers;
use App\Models\M_kas_keluar;

class Data_Kas_Keluar extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM data_kas WHERE jenis_kas = 'keluar'");
        $data['kas_keluar'] = $query->getResult();
        $mb     = new M_kas_keluar();
        $data['totaljumlah'] = $mb->hitungkeluar();
        return view('data_kas_keluar/index', $data);
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
                'jumlah_keluar'  => $this->request->getVar('jumlah_keluar'),
                'jenis'         => $this->request->getVar('jenis'),
                'jenis_kas'     => "keluar",
                'jumlah_masuk' => 0
            );
            $model = new M_kas_keluar();
            $model->tambah($data);
            return redirect()->to(base_url('data_kas_keluar'));
            // End masuk database
        }
        return view('data_kas_keluar/tambah');
    }

    public function detail($id)
    {
        $mb     = new M_kas_keluar();
        $users  = $mb->detail($id);
        $data = array(
            'users'    => $users
        );
        return view('data_kas_keluar/detail', $data);      
    }

    public function edit($id)
    {
        $mb     = new  M_kas_keluar();
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
                'jumlah_keluar'  => $this->request->getVar('jumlah_keluar'),
                'jenis'         => $this->request->getVar('jenis'),
                'jenis_kas'     => "keluar",
                'jumlah_masuk' => 0
            );
            $model = new M_kas_keluar();
            $model->edit($data);
            return redirect()->to(base_url('data_kas_keluar'));
            // End masuk database
        }

        $data   = array (
            'users' => $users
        );
        return view('data_kas_keluar/edit', $data);
    }

    public function delete($id)
    {
        $model     = new M_kas_keluar();
        $kategori = $model->hapus($id);
        return redirect()->to(base_url('data_kas_keluar'));
    }
}
