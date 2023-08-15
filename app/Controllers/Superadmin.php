<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\Respon;
use App\Models\VisitorModel;

use Config\ValidationRules;

class Superadmin extends BaseController #INI CONTOLLER CRUD KELOLA ADMIN & LOGIN
{
    protected $userModel, $ModelRespon, $visitorModel;
    public function __construct()
    {
        $this->ModelRespon = new Respon();
        $this->userModel = new UserModel();
        $this->visitorModel = new VisitorModel();
    }

    public function kelolauser()
    {
        $user = $this->userModel->findAll();

        $data = [
            'title' => 'Kelola User', // Berikan nilai untuk $title
            'user' => $user
        ];

        return view('superadmin/kuser/index', $data);
    }


    public function tambahuser()
    {
        session();

        $user = $this->userModel->findAll();

        $data = [
            'title' => 'Form tambah data user',
            'validation' => \Config\Services::validation()
        ];

        return view('superadmin/kuser/tambahuser', $data);
    }

    public function save()
    {
        //validation input

        $this->userModel->tambah([
            'nama' => $this->request->getVar('nama'),
            'askot' => $this->request->getVar('askot'),
            'umur' => $this->request->getVar('umur'),
            'role' => $this->request->getVar('role'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash(123, PASSWORD_DEFAULT) // Membuat password acak
        ]);
        session()->setFlashdata('success', 'Data berhasil ditambahkan.');


        return redirect()->to('/superadmin/kelolauser');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/superadmin/kelolauser');
    }

    public function update($id_user)
    {
        session();

        $data = [
            'title' => 'Form Ubah data user',
            'validation' => \Config\Services::validation(),
            'user' =>  $this->userModel->getUser($id_user)
        ];

        return view('superadmin/kuser/update', $data);
    }

    public function ubah($id_user)
    {
        $this->userModel->update($id_user, [
            'nama' => $this->request->getVar('nama'),
            'askot' => $this->request->getVar('askot'),
            'umur' => $this->request->getVar('umur'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'role' => $this->request->getVar('role')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/superadmin/kelolauser');
    }


    public function index()
    {
        // Retrieve the count of admin users from the database
        $userCount = $this->userModel->countAdminUsers();
        $responCount = $this->ModelRespon->countRespon();
        $visitorCount = $this->visitorModel->countVisitor();

        // Set the title for the view
        $data['title'] = 'Dashboard';

        // Pass the admin count to the view
        $data['adminCount'] = $userCount;
        $data['responCount'] = $responCount;
        $data['visitorCount'] = $visitorCount;

        // Load the view and pass the data
        return view('superadmin/dashboard', $data);
    }

    public function respon()
    {
        $respon = $this->ModelRespon->findAll();
        $responCount = $this->ModelRespon->countRespon();

        $data = [
            'title' => 'virtualtour|Kelola Respon',
            'respon' => $respon,
            'responCount' => $responCount
        ];

        return view('superadmin/respon', $data);
    }

    public function deleterespon($id)
    {
        $this->visitorModel->where('id', $id)->delete(); // 
        return redirect()->to('/superadmin/respon');
    }

    public function reset()
    {
        session();

        $data = [
            'title' => 'Form Reset Kata Sandi',
            'validation' => \Config\Services::validation(),
            'user' =>  $this->userModel->getUser(session()->get('id'))
        ];

        return view('admin/reset', $data);
    }

    public function ganti($id_user)
    {
        $user = $this->userModel->getUser($id_user);

        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $newPassword = $this->request->getVar('password');
        $confirmedPassword = $this->request->getVar('confirmpassword');

        if ($newPassword != $confirmedPassword) {
            return redirect()->back()->with('error', 'Konfirmasi password tidak sesuai.');
        }

        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $this->userModel->update($user['id_user'], ['password' => $hashedPassword]);

        session()->setFlashdata('success', 'Kata Sandi berhasil diubah.');

        return redirect()->to('/admin/dashboard');
    }
}
