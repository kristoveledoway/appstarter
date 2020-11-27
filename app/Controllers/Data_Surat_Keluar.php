<?php

namespace App\Controllers;

use App\Models\M_surat_keluar;
use App\Models\M_surat_masuk;

class Data_Surat_Keluar extends BaseController
{
    public function __construct()
    {
        $this->Model_surat = new M_surat_keluar();
        $this->Model_surat_masuk = new M_surat_masuk();
        helper(['text']);
    }

    public function index()
    {
        $datas = $this->Model_surat->surat_keluar_list();
        $data = array(
            'surat_keluar' => $datas
        );
        return view('data_surat_keluar/index', $data);
    }

    public function download($id)
    {
        $users = $this->Model_surat->detail($id);
        $data = [
            'arsip' => $users
        ];
        return view('data_surat_keluar/download', $data);
    }

    public function detail($id)
    {
        $users  = $this->Model_surat->detail($id);
        $data = array(
            'users'    => $users
        );
        return view('data_surat_keluar/detail', $data);
    }

    public function tambah()
    {
        $id_surat_masuk = $this->input->post('id_surat_masuk', TRUE);
        $datas = $this->Model_surat->get_surat_masuk($id_surat_masuk)->result();
        $data = array(
            'no_surat' => date('ymds') . '-' . random_string('alnum', 4)
        );

        $validated =  $this->validate([
            'no_surat_keluar'    => 'required',
            'tgl_surat'         => 'required',
            'perihal'      => 'required',
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
                'no_surat_keluar'   => $this->request->getVar('no_surat_keluar'),
                'tgl_surat'         => $this->request->getVar('tgl_surat'),
                'perihal'           => $this->request->getVar('perihal'),
                'sifat'             => $this->request->getVar('sifat'),
                'lampiran'          => $this->request->getVar('lampiran'),
                'no_surat_masuk'    => $this->request->getVar('no_surat_masuk'),
                'file'              => $dokumenbaru
            );
            $dokumen->move('assets/uploads/dokumen_surat_keluar', $dokumenbaru);
            $this->Model_surat->tambah($data);
            return redirect()->to(base_url('data_surat_keluar'));
            // End masuk database
        }
        echo json_encode($datas);
        return view('data_surat_keluar/tambah', $data);
    }

    public function edit($id)
    {
        $users     = $this->Model_surat->detail($id);

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
            $this->Model_surat->edit($data);
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
        $data = [
            'surat' => $this->Model_surat->detail($id)
        ];
        $surat = $data['surat']['file'];
        if ($surat != 'default.docx') {
            unlink('assets/upload/dokumen_surat_keluar' . $surat);
        }
        $this->Model_surat->hapus($id);
        return redirect()->to(base_url('data_surat_keluar'));
    }
}
