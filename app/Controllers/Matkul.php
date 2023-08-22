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
        $data = [
            'title' => 'Mata Kuliah',
            'matkul' => $this->matkulModel->getMatkul()
        ];

        return view('matkul', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Mata Kuliah',
            'matkul' => $this->matkulModel->getMatkul($slug)
        ];

        if (empty($data['matkul'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data mata kuliah "' . $slug . '" tidak ditemukan.');
        }

        return view('detail_matkul', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Mata Kuliah',
            'validation' => \Config\Services::validation()
        ];
        return view('c_matkul', $data);
    }

    public function save()
    {

        // Validasi Input
        if (!$this->validate([
            'nama_matkul' => 'required|is_unique[mata_kuliah.nama_matkul]',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('mata_kuliah/input')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama_matkul'), '-', true);

        $this->matkulModel->save([
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'slug' => $slug,
            'desk_matkul' => $this->request->getVar('desk_matkul'),
            'prodi' => $this->request->getVar('prodi'),
        ]);

        return redirect()->to('mata_kuliah');
    }

    public function delete($id)
    {
        $this->matkulModel->delete($id);
        return redirect()->to('mata_kuliah');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Mata Kuliah',
            'validation' => \Config\Services::validation(),
            'matkul' => $this->matkulModel->getMatkul($slug)
        ];
        return view('u_matkul', $data);
    }

    public function update($id_matkul)
    {

        // Cek Matkul
        $nama_matkul = $this->matkulModel->getMatkul($this->request->getVar('slug'));

        if ($nama_matkul['nama_matkul'] == $this->request->getVar('nama_matkul')) {
            $rule_nama_matkul = 'required';
        } else {
            $rule_nama_matkul = 'required|is_unique[mata_kuliah.nama_matkul]';
        }

        // Validasi Input
        if (!$this->validate([
            'nama_matkul' => $rule_nama_matkul,
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('mata_kuliah/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama_matkul'), '-', true);

        $this->matkulModel->save([
            'id_matkul' => $id_matkul,
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'slug' => $slug,
            'desk_matkul' => $this->request->getVar('desk_matkul'),
            'prodi' => $this->request->getVar('prodi')
        ]);

        return redirect()->to('mata_kuliah');
    }
}
