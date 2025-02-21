<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends BaseController
{
    public function insert_register()
    {
        $userModel = new UserModel();

        // Validasi input
        $rules = [
            'email' => 'required|min_length[3]|max_length[50]',
            'username' => 'required|min_length[3]|max_length[50]',
            'password' => 'required|max_length[255]', // Perbesar ukuran password
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Simpan data ke database
        $data = [
            'email'    => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'), // Jika ingin pakai hashing, gunakan password_hash()
        ];

        $userModel->insert($data);

        return redirect()->to('/dashboard')->with('success', 'Registrasi berhasil!');
    }
}
