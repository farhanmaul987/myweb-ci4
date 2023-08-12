<?php

namespace App\Controllers;

use App\Models\MateriModel;

class Materi extends BaseController
{
    protected $materiModel;

    public function __construct()
    {
        $this->materiModel = new MateriModel();
    }

    public function daftar_materi()
    {
        $materi = $this->materiModel->findAll();

        $data = [
            'title' => 'Daftar Materi',
            'materi' => $materi
        ];

        return view('materi', $data);
    }

    public function input_materi()
    {
        $data['title'] = 'Input Materi';
        echo view('c_materi', $data);
    }
}
