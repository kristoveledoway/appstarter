<?php

namespace App\Controllers;
use App\Models\M_surat_keluar;

class Data_Surat_Keluar extends BaseController
{
    public function index()
    {
        $model = new M_surat_keluar();
        $data['surat_keluar'] = $model->surat_keluar_list()->getResult();
        return view('data_surat_keluar/index', $data);
    }

    public function detail($id)
    {
        $mb     = new M_surat_keluar();
        $users  = $mb->detail($id);
        $data = array(
            'users'    => $users
        );
        return view('data_surat_keluar/detail', $data);      
    }

    public function tambah()
    {
        $validated =  $this->validate([
            'no_surat_keluar'    => 'required',
            'tgl_surat'         => 'required',
            'perihal'      => 'required',
            
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'no_surat_keluar'   => $this->request->getVar('no_surat_keluar'),
                'tgl_surat'         => $this->request->getVar('tgl_surat'),
                'perihal'           => $this->request->getVar('perihal'),
                'sifat'             => $this->request->getVar('sifat'),
                'lampiran'          => $this->request->getVar('lampiran'),
                'no_surat_masuk'    => $this->request->getVar('no_surat_masuk'),
                'file'              => $this->request->getVar('file'),
            );
            $model = new M_surat_keluar();
            $model->tambah($data);
            return redirect()->to(base_url('data_surat_keluar'));
            // End masuk database
        }
        return view('data_surat_keluar/tambah');
    }

    public function edit($id)
    {
        $mb         = new M_surat_keluar();
        $users     = $mb->detail($id);

        $validated =  $this->validate([
            'no_surat_keluar'    => 'required',
            'tgl_surat'         => 'required',
            'perihal'      => 'required',
            
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'no_surat_keluar'   => $this->request->getVar('no_surat_keluar'),
                'tgl_surat'         => $this->request->getVar('tgl_surat'),
                'perihal'           => $this->request->getVar('perihal'),
                'sifat'             => $this->request->getVar('sifat'),
                'lampiran'          => $this->request->getVar('lampiran'),
                'no_surat_masuk'    => $this->request->getVar('no_surat_masuk'),
                'file'              => $this->request->getVar('file'),
            );
            $model = new M_surat_keluar();
            $model->edit($data);
            return redirect()->to(base_url('data_surat_keluar'));
            // End masuk database
        }

        $data = array(
            'users'    => $users
        );
        return view('data_surat_keluar/edit', $data);
    }

    public function delete($id)
    {
        $model     = new M_surat_keluar();
        $kategori = $model->hapus($id);
        return redirect()->to(base_url('data_surat_keluar'));
    }
}
