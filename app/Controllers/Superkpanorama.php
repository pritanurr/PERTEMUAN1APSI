<?php

namespace App\Controllers;

class superkpanorama extends BaseController  #ini conrtroller CRUD SUPERADMIN
{
    public function index()
    {

        $data = [
            'title' => 'Kategori Panorama| Kelola',

        ];

        return view('superadmin/kpanorama/tampilK', $data);
    }


    public function tambah()
    {

        $data = [
            'title' => 'Kategori Panorama | Kelola',

        ];

        return view('superadmin/kpanorama/tambahK', $data);
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
        } elseif ($this->request->getPost('gedung') == 'GKB') {
            if (file_exists('file_gedung/gedung_GKB.php')) {
                unlink('file_gedung/gedung_GKB.php');
            }
            $foto->move('file_gedung', 'gedung_GKB.php');
        }



        return redirect()->to(base_url('superadmin/'));
    }

    public function edit()
    {

        $data = [
            'title' => 'Kategori Panorama | Kelola',

        ];

        return view('superadmin/kpanorama//editK', $data);
    }
}
