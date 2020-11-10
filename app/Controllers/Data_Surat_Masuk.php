<?php

namespace App\Controllers;
use App\Models\M_surat_masuk;

class Data_Surat_Masuk extends BaseController
{
    public function index()
    {
        $model = new M_surat_masuk();
        $data['surat_masuk'] = $model->surat_masuk_list()->getResult();
        return view('data_surat_masuk/index', $data);
    }

    public function detail($id)
    {
        $mb     = new M_surat_masuk();
        $users  = $mb->detail($id);
        $data = array(
            'users'    => $users
        );
        return view('data_surat_masuk/detail', $data);      
    }

    public function tambah()
    {
        $validated =  $this->validate([
            'no_surat_masuk'    => 'required',
            'tgl_surat'         => 'required',
            'tgl_diterima'      => 'required',
            
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'no_surat_masuk'    => $this->request->getVar('no_surat_masuk'),
                'tgl_surat'         => $this->request->getVar('tgl_surat'),
                'tgl_diterima'      => $this->request->getVar('tgl_diterima'),
                'perihal'           => $this->request->getVar('perihal'),
                'sifat'             => $this->request->getVar('sifat'),
                'lampiran'          => $this->request->getVar('lampiran'),
                'file'              => $this->request->getVar('file'),
            );
            $model = new M_surat_masuk();
            $model->tambah($data);
            return redirect()->to(base_url('data_surat_masuk'));
            // End masuk database
        }
        return view('data_surat_masuk/tambah');
    }

    public function edit($id)
    {
        $mb         = new M_surat_masuk();
        $users     = $mb->detail($id);

        $validated =  $this->validate([
            'no_surat_masuk'    => 'required',
            'tgl_surat'         => 'required',
            'tgl_diterima'      => 'required',
            
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'no_surat_masuk'    => $this->request->getVar('no_surat_masuk'),
                'tgl_surat'         => $this->request->getVar('tgl_surat'),
                'tgl_diterima'      => $this->request->getVar('tgl_diterima'),
                'perihal'           => $this->request->getVar('perihal'),
                'sifat'             => $this->request->getVar('sifat'),
                'lampiran'          => $this->request->getVar('lampiran'),
                'file'              => $this->request->getVar('file'),
            );
            $model = new M_surat_masuk();
            $model->edit($data);
            return redirect()->to(base_url('data_surat_masuk'));
            // End masuk database
        }

        $data = array(
            'users'    => $users
        );
        return view('data_surat_masuk/edit', $data);
    }

    public function delete($id)
    {
        $model     = new M_surat_masuk();
        $kategori = $model->hapus($id);
        return redirect()->to(base_url('data_surat_masuk'));
    }
}
