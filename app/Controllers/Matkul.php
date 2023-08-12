<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class Matkul extends BaseController
{
    protected $matkulModel;

    public function __construct()
    {
        $this->matkulModel = new MatkulModel();
    }

    public function matkul()
    {
        // $matkul = $this->matkulModel->findAll();

        $data = [
            'title' => 'Mata Kuliah',
            'matkul' => $this->matkulModel->getMatkul()
        ];

        return view('matkul', $data);
    }

    public function detail($slug)
    {
        // $matkul = $this->matkulModel->getMatkul($slug);

        $data = [
            'title' => 'Detail Mata Kuliah',
            'matkul' => $this->matkulModel->getMatkul($slug)
        ];

        return view('detail_matkul', $data);
    }

    public function create()
    {
        $data['title'] = 'Input Mata Kuliah';
        echo view('c_matkul', $data);
    }
}
