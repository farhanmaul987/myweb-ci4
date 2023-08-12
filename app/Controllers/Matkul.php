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
        $matkul = $this->matkulModel->findAll();
        
        $data = [
            'title' => 'Mata Kuliah',
            'matkul' => $matkul
        ];

        return view('matkul', $data);
    }

    public function input_matkul()
    {
        $data['title'] = 'Input Mata Kuliah';
        echo view('c_matkul', $data);
    }
}
