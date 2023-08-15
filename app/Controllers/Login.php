<?php

namespace App\Controllers;

use App\Models\UserModel;



class login extends BaseController #INI CONTOLLER CRUD KELOLA ADMIN & LOGIN
{
    protected $userModel;
    public function __construct()
    {

        $this->userModel = new UserModel();
    }
    public function index()
    {
        $userModel = new \App\Models\UserModel();
        $login = $this->request->getPost('login');
        $err = ''; // inisialisasi variabel $err

        if ($login) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            if ($email == '' or $password == '') {
                $err = "Silahkan masukan email dan password";
            }

            if ($err) {
                session()->setFlashdata('email', $email);
                session()->setFlashdata('error', $err);
            } else {
                $role = $this->cekEmail($email);
                $pass = $this->cekPassword($email, $password);
                // var_dump($pass);
                // die();
                if ($role == '1' && $pass == true) {
                    $data = $this->userModel->getUserByEmail($email);
                    session()->set('id', $data['id_user']);
                    session()->set('nama', $data['nama']);
                    session()->set('askot', $data['askot']);
                    session()->set('umur', $data['umur']);
                    session()->set('role', $data['role']);
                    session()->set('email', $data['email']);
                    return redirect()->to('superadmin');
                } elseif ($role == '2' && $pass == true) {
                    $data = $this->userModel->getUserByEmail($email);
                    session()->set('id', $data['id_user']);
                    session()->set('nama', $data['nama']);
                    session()->set('askot', $data['askot']);
                    session()->set('umur', $data['umur']);
                    session()->set('role', $data['role']);
                    session()->set('email', $data['email']);
                    return redirect()->to('Admin/dashboard');
                } elseif ($role == '3' && $pass == true) {
                    $data = $this->userModel->getUserByEmail($email);
                    session()->set('id', $data['id_user']);
                    session()->set('nama', $data['nama']);
                    session()->set('askot', $data['askot']);
                    session()->set('umur', $data['umur']);
                    session()->set('role', $data['role']);
                    session()->set('email', $data['email']);
                    return redirect()->to('Admin/dashboard');
                } elseif ($role == '4' && $pass == true) {
                    $data = $this->userModel->getUserByEmail($email);
                    session()->set('id', $data['id_user']);
                    session()->set('nama', $data['nama']);
                    session()->set('askot', $data['askot']);
                    session()->set('umur', $data['umur']);
                    session()->set('role', $data['role']);
                    session()->set('email', $data['email']);
                    return redirect()->to('Admin/dashboard');
                } elseif ($role == '5' && $pass == true) {
                    $data = $this->userModel->getUserByEmail($email);
                    session()->set('id', $data['id_user']);
                    session()->set('nama', $data['nama']);
                    session()->set('askot', $data['askot']);
                    session()->set('umur', $data['umur']);
                    session()->set('role', $data['role']);
                    session()->set('email', $data['email']);
                    return redirect()->to('Admin/dashboard');
                } else {
                    echo "<script>alert('Login Gagal!'); window.location='" . base_url('/login') . "';</script>";
                }
            }
        }

        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];

        return view('login', $data);
    }


    public function cekEmail($email)
    {
        $userModel = new \App\Models\UserModel();
        $user = $userModel->getUserByEmail($email);
        // var_dump($user);
        // die();
        if ($user) {
            return $user['role']; // Mengembalikan peran user berdasarkan email
        }

        return null; // Email tidak ditemukan
    }

    public function cekPassword($email, $password)
    {
        $userModel = new \App\Models\UserModel();
        $user = $userModel->getUserByEmail($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // die();
                return true; // Password sesuai
            }
        }

        return false; // Password tidak sesuai atau email tidak ditemukan
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
