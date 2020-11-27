<?php

namespace App\Controllers;

use App\Models\M_surat_masuk;

class Data_Surat_Masuk extends BaseController
{
    public function __construct()
    {
        $this->Model_surat = new M_surat_masuk();
        helper(['text']);
    }

    public function index()
    {
        $datas = $this->Model_surat->surat_masuk_list();
        $data = array(
            'surat_masuk' => $datas
        );
        return view('data_surat_masuk/index', $data);
    }

    public function download($id)
    {
        $users  = $this->Model_surat->detail($id);
        $data = [
            'arsip' => $users
        ];
        return view('data_surat_masuk/download', $data);
    }

    public function detail($id)
    {
        $users  = $this->Model_surat->detail($id);
        $data = array(
            'users'    => $users
        );
        return view('data_surat_masuk/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'no_surat' => date('ymds') . '-' . random_string('alnum', 4)
        ];

        $validated =  $this->validate([
            'no_surat_masuk'    => 'required',
            'tgl_surat'         => 'required',
            'tgl_diterima'      => 'required',
            'file'              => [
                'uploaded[file]',
                'mime_in[file,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document]',
                'max_size[file,200024]'
            ],
        ]);

        if ($validated) {
            // Masuk database
            $dokumen = $this->request->getFile('file');
            $dokumenbaru = $dokumen->getRandomName();
            $data = array(
                'no_surat_masuk'    => $this->request->getVar('no_surat_masuk'),
                'tgl_surat'         => $this->request->getVar('tgl_surat'),
                'tgl_diterima'      => $this->request->getVar('tgl_diterima'),
                'perihal'           => $this->request->getVar('perihal'),
                'sifat'             => $this->request->getVar('sifat'),
                'lampiran'          => $this->request->getVar('lampiran'),
                'file'              => $dokumenbaru
            );
            $dokumen->move('assets/upload/dokumen_surat_masuk/', $dokumenbaru);
            $this->Model_surat->tambah($data);
            return redirect()->to(base_url('data_surat_masuk'));
            // End masuk database
        }
        return view('data_surat_masuk/tambah', $data);
    }

    public function edit($id)
    {
        $users     = $this->Model_surat->detail($id);

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
            $this->Model_surat->edit($data);
            return redirect()->to(base_url('data_surat_masuk'));
            // End masuk database
        }

        $data = [
            'users'    => $users
        ];
        return view('data_surat_masuk/edit', $data);
    }

    public function delete($id)
    {
        $data = [
            'surat' => $this->Model_surat->detail($id)
        ];
        $surat = $data['surat']['file'];
        if ($surat != 'default.docx') {
            unlink('assets/upload/dokumen_surat_masuk/' . $surat);
        }
        $this->Model_surat->hapus($id);
        return redirect()->to(base_url('data_surat_masuk'));
    }
}
