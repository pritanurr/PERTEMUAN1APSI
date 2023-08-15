<?php

namespace App\Controllers;

use App\Models\VisitorModel;

use Config\ValidationRules;

class respon extends BaseController
{
    protected $visitorModel;
    public function __construct()
    {

        $this->visitorModel = new VisitorModel();
    }
    public function index()
    {
        $visitor = $this->visitorModel->findAll();
        $data = [
            'title' => 'Data User',
            'user' => $visitor
        ];


        return view('superadmin/datavisitor', $data);
    }
    public function delete($id)
    {
        $this->visitorModel->where('id', $id)->delete(); // 
        return redirect()->to('/visitor');
    }
}
