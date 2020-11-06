<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_data_diri;

class Data_Diri extends Controller
{
    public function index()
    {
        $model = new M_data_diri();
        $data['diri'] = $model->data_diri_list()->getResult();
        return view('data_diri/index', $data);
    }

    public function tambah()
    {
        $validated =  $this->validate([
            'nama'              => 'required',
            'nik'               => 'required',
            'tempat_lahir'      => 'required',
            
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'id'                => $this->request->getVar('id'),
                'nama'              => $this->request->getVar('nama'),
                'nik'               => $this->request->getVar('nik'),
                'tempat_lahir'      => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir'     => $this->request->getVar('tanggal_lahir'),
                'jk'                => $this->request->getVar('jk'),
                'kewarganegaraan'   => $this->request->getVar('kewarganegaraan'),
                'agama'             => $this->request->getVar('agama'),
                'nama_ibu'          => $this->request->getVar('nama_ibu'),
                'email'             => $this->request->getVar('email'),
                'no_telp'           => $this->request->getVar('no_telp'),
                'alamat'            => $this->request->getVar('alamat'),
                'kode_pos'          => $this->request->getVar('kode_pos'),
                'provinsi'          => $this->request->getVar('provinsi'),
                'kabupaten'         => $this->request->getVar('kabupaten'),
                'kecamatan'         => $this->request->getVar('kecamatan'),
                'pendidikan'        => $this->request->getVar('pendidikan'),
                'sekolah'           => $this->request->getVar('sekolah'),
                'kampus'            => $this->request->getVar('kampus'),
                'prodi'             => $this->request->getVar('prodi'),
            );
            $model = new M_data_diri();
            $model->tambah($data);
            return redirect()->to(base_url('data_diri'));
            // End masuk database
        }
        return view('data_diri/tambah');
    }

    public function delete($id)
    {
        $model     = new M_data_diri();
        $kategori = $model->hapus($id);
        return redirect()->to(base_url('data_diri'));
    }

    public function edit($id)
    {
        $mb         = new M_data_diri();
        $users     = $mb->detail($id);

        $validated =  $this->validate([
            'nama'              => 'required',
            'nik'               => 'required',
            'tempat_lahir'      => 'required',
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'id'                => $this->request->getVar('id'),
                'nama'              => $this->request->getVar('nama'),
                'nik'               => $this->request->getVar('nik'),
                'tempat_lahir'      => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir'     => $this->request->getVar('tanggal_lahir'),
                'jk'                => $this->request->getVar('jk'),
                'kewarganegaraan'   => $this->request->getVar('kewarganegaraan'),
                'agama'             => $this->request->getVar('agama'),
                'nama_ibu'          => $this->request->getVar('nama_ibu'),
                'email'             => $this->request->getVar('email'),
                'no_telp'           => $this->request->getVar('no_telp'),
                'alamat'            => $this->request->getVar('alamat'),
                'kode_pos'          => $this->request->getVar('kode_pos'),
                'provinsi'          => $this->request->getVar('provinsi'),
                'kabupaten'         => $this->request->getVar('kabupaten'),
                'kecamatan'         => $this->request->getVar('kecamatan'),
                'pendidikan'        => $this->request->getVar('pendidikan'),
                'sekolah'           => $this->request->getVar('sekolah'),
                'kampus'            => $this->request->getVar('kampus'),
                'prodi'             => $this->request->getVar('prodi'),
            );
            $model = new M_data_diri();
            $model->edit($data);
            return redirect()->to(base_url('data_diri'));
            // End masuk database
        }

        $data = array(
            'users'    => $users
        );
        return view('data_diri/edit', $data);
    }

    public function detail($id)
    {
        $mb     = new M_data_diri();
        $users  = $mb->detail($id);
        $data = array(
            'users'    => $users
        );
        return view('data_diri/edit', $data);      
    }
}
