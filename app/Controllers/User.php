<?php

namespace App\Controllers;

use App\Models\Respon;
use App\Models\VisitorModel;

class User extends BaseController
{
    protected $visitorModel, $ModelRespon;

    public function __construct()
    {
        $this->visitorModel = new VisitorModel();
        $this->ModelRespon = new Respon();
    }

    public function index()
    {
        $data = [
            'title' => 'User | ',
        ];

        return view('user/landing', $data);
    }

    public function save()
    {
        // Validation input
        // ...

        // Get the age range from the request
        $ageRange = $this->request->getVar('age_range');

        // Check if geolocation is available
        if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
            // Get the latitude and longitude from the request
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];

            // Save the data with location information
            $this->visitorModel->tambah([
                'age_range' => $ageRange,
                'latitude' => $latitude,
                'longitude' => $longitude,
            ]);
        } else {
            // Save the data without location information
            $this->saveDataWithoutLocation($ageRange);
        }

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/user/menu');
    }

    public function saveDataWithoutLocation($ageRange)
    {
        // Save the data without location information
        $this->visitorModel->tambah([
            'age_range' => $ageRange,
        ]);
    }

    public function menu()
    {
        $data = [
            'title' => 'User | menu',
        ];

        return view('user/menu', $data);
    }

    public function kategori()
    {
        $data = [
            'title' => 'User | Kategori Minimap',
        ];

        return view('user/kategori', $data);
    }

    public function jmi()
    {
        $data = [
            'title' => ' virtualtour|JMI',
            'id'    => $this->visitorModel->orderBy('id', 'DESC')->first(1),
        ];

        return view('../../public/file_gedung/gedung_JMI', $data);
    }

    public function agroindustri()
    {
        $data = [
            'title' => 'virtualtour|Agroindustri',
            'id'    => $this->visitorModel->orderBy('id', 'DESC')->first(1),
        ];

        return view('../../public/file_gedung/gedung_agro', $data);
    }

    public function tppm()
    {
        $data = [
            'title' => 'virtualtour|TPPM',
            'id'    => $this->visitorModel->orderBy('id', 'DESC')->first(1),
        ];

        // return view('Views_KPanorama/TPPM', $data);
        return view('../../public/file_gedung/gedung_mesin', $data);
    }
    public function keperawatan()
    {
        $data = [
            'title' => 'virtualtour|keperawatan',
            'id'    => $this->visitorModel->orderBy('id', 'DESC')->first(1),
        ];

        // return view('Views_KPanorama/TPPM', $data);
        return view('../../public/file_gedung/gedung_Keperawatan', $data);
    }

    public function GKB()
    {
        $data = [
            'title' => 'virtualtour|Gedung Kuliah Bersama',
            'id'    => $this->visitorModel->orderBy('id', 'DESC')->first(1),
        ];

        // return view('Views_KPanorama/TPPM', $data);
        return view('../../public/file_gedung/gedung_GKB', $data);
    }

    public function minimap()
    {
        $data = [
            'title' => 'virtualtour|Minimap',
        ];

        return view('user/minimap', $data);
    }
    public function map()
    {
        $data = [
            'title' => 'virtualtour|Minimap',
        ];

        return view('user/map', $data);
    }

    public function tambah_respon()
    {
        $this->ModelRespon->insert($this->request->getPost());
        return redirect()->to(base_url('user/jmi'));
    }
    public function tambah_respon1()
    {
        $this->ModelRespon->insert($this->request->getPost());
        return redirect()->to(base_url('user/agroindustri'));
    }
    public function tambah_respon2()
    {
        $this->ModelRespon->insert($this->request->getPost());
        return redirect()->to(base_url('user/tppm'));
    }
    public function tambah_respon3()
    {
        $this->ModelRespon->insert($this->request->getPost());
        return redirect()->to(base_url('user/keperawatan'));
    }
    public function tambah_respon4()
    {
        $this->ModelRespon->insert($this->request->getPost());
        return redirect()->to(base_url('user/GKB'));
    }
}
