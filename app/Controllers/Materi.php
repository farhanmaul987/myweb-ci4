<?php

namespace App\Controllers;

class Materi extends BaseController
{
    public function daftar_materi()
    {
        $data['title'] = 'Daftar Materi';
        echo view('daftar_materi', $data);
    }

    public function input_materi()
    {
        $data['title'] = 'Input Materi';
        echo view('c_materi', $data);
    }
}
