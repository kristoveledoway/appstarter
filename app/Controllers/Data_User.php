<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_user;

class Data_User extends Controller
{
    public function index()
    {
        $model = new M_user();
        $data['users'] = $model->user_list()->getResult();
        return view('data_user/index', $data);
    }

    public function tambah()
    {
        $validated =  $this->validate([
            'nama'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'level' => 'required',
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'id'        => $this->request->getVar('id'),
                'nama'    => $this->request->getVar('nama'),
                'username'    => $this->request->getVar('username'),
                'password'    => $this->request->getVar('password'),
                'level'            => $this->request->getVar('level'),
            );
            $model = new M_user();
            $model->tambah($data);
            return redirect()->to(base_url('data_user'));
            // End masuk database
        }
        return view('data_user/tambah');
    }

    public function delete($id)
    {
        $model     = new M_user();
        $kategori = $model->hapus($id);
        return redirect()->to(base_url('data_user'));
    }

    public function edit($id)
    {
        $mb         = new M_user();
        $users     = $mb->detail($id);

        $validated =  $this->validate([
            'nama'  => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'level' => 'required',
        ]);

        if ($validated) {
            // Masuk database
            $data = array(
                'id'        => $this->request->getVar('id'),
                'nama'    => $this->request->getVar('nama'),
                'username'    => $this->request->getVar('username'),
                'password'    => $this->request->getVar('password'),
                'level'            => $this->request->getVar('level'),
            );
            $model = new M_user();
            $model->edit($data);
            return redirect()->to(base_url('data_user'));
            // End masuk database
        }

        $data = array(
            'users'    => $users
        );
        return view('data_user/edit', $data);
    }
}
