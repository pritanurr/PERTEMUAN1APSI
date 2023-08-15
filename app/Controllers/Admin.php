<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\Respon;
use App\Models\VisitorModel;

class admin extends BaseController #ini CRUD CONTROLLER ADMIN
{
    protected $userModel, $ModelRespon, $visitorModel;
    public function __construct()
    {
        helper('download');
        $this->ModelRespon = new Respon();
        $this->userModel = new UserModel();
        $this->visitorModel = new VisitorModel();
    }

    public function dashboard()
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
        return view('/admin/dashboard', $data);
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

        return view('admin/respon', $data);
    }

    public function deleterespon($id)
    {
        $this->visitorModel->where('id', $id)->delete(); // 
        return redirect()->to('/superadmin/respon');
    }

    public function edit()
    {

        $data = [
            'title' => 'Kategori Panorama | Kelola',

        ];

        return view('admin/kpanorama/edit', $data);
    }

    public function add()
    {

        $data = [
            'title' => 'Kategori Panorama | Kelola',

        ];

        return view('admin/kpanorama/tambah', $data);
    }


    public function insert()
    {
        $foto = $this->request->getFile('foto');
        if ($this->request->getPost('gedung') == 'Mesin') {
            if (file_exists('file_gedung/gedung_mesin.php')) {
                unlink('file_gedung/gedung_mesin.php');
            }
            $foto->move('file_gedung', 'gedung_mesin.php');
        } elseif ($this->request->getPost('gedung') == 'Agroindustri') {
            if (file_exists('file_gedung/gedung_agro.php')) {
                unlink('file_gedung/gedung_agro.php');
            }
            $foto->move('file_gedung', 'gedung_agro.php');
        } elseif ($this->request->getPost('gedung') == 'JMI') {
            if (file_exists('file_gedung/gedung_JMI.php')) {
                unlink('file_gedung/gedung_JMI.php');
            }
            $foto->move('file_gedung', 'gedung_JMI.php');
        } elseif ($this->request->getPost('gedung') == 'Keperawatan') {
            if (file_exists('file_gedung/gedung_Keperawatan.php')) {
                unlink('file_gedung/gedung_Keperawatan.php');
            }
            $foto->move('file_gedung', 'gedung_Keperawatan.php');
        }

        return redirect()->to(base_url('admin/dashboard'));
    }

    public function download()
    {
        $gedung = $this->request->getPost('gedung');

        if ($gedung == 'Agroindustri') {
            $file = 'gedung_agro.php';
        } elseif ($gedung == 'Keperawatan') {
            $file = 'gedung_Keperawatan.php';
        } elseif ($gedung == 'Mesin') {
            $file = 'gedung_mesin.php';
        } else {
            $file = 'gedung_JMI.php';
        }

        // dd($gedung);

        $data = file_get_contents('file_gedung/' . $file);
        $nama = $gedung . '.html';
        return $this->response->download($nama, $data);
    }
}
