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
            'thumbnail' => 'max_size[thumbnail,3072]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('mata_kuliah/input')->withInput()->with('validation', $validation);
            return redirect()->to('mata_kuliah/input')->withInput();
        }

        // Ambil Gambar
        $thumbfile = $this->request->getFile('thumbnail');

        // Jika tidak upload file gambar
        if ($thumbfile->getError() == 4) {
            $thumbname = 'default.jpg';
        } else {
            // Generate Random Name
            $thumbname = $thumbfile->getRandomName();

            // Pindah Image ke Folder
            $thumbfile->move('img', $thumbname);
        }


        $slug = url_title($this->request->getVar('nama_matkul'), '-', true);

        $this->matkulModel->save([
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'slug' => $slug,
            'desk_matkul' => $this->request->getVar('desk_matkul'),
            'prodi' => $this->request->getVar('prodi'),
            'thumbnail' => $thumbname
        ]);

        return redirect()->to('mata_kuliah');
    }

    public function delete($id)
    {

        // Cari gambar berdasarkan ID
        $matkul = $this->matkulModel->find($id);

        // Cek jika gambarnya default
        if ($matkul['thumbnail'] !== 'default.jpg') {
            // Hapus gambar
            unlink('img/' . $matkul['thumbnail']);
        }


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
            'thumbnail' => 'max_size[thumbnail,3072]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]'
        ])) {
            return redirect()->to('mata_kuliah/edit/' . $this->request->getVar('slug'))->withInput();
        }

        // Ambil Gambar
        $thumbfile = $this->request->getFile('thumbnail');

        // Cek apakah gambar lama adalah gambar default
        $isDefaultImage = ($this->request->getVar('oldthumb') === 'default.jpg');

        // Cek gambar lama
        if ($thumbfile->getError() == 4) {
            // Gunakan gambar lama jika bukan gambar default
            $thumbname = $isDefaultImage ? 'default.jpg' : $this->request->getVar('oldthumb');
        } else {
            // Generate Random Name
            $thumbname = $thumbfile->getRandomName();

            // Move Image
            $thumbfile->move('img', $thumbname);

            // Hapus Image lama jika bukan gambar default
            if (!$isDefaultImage) {
                unlink('img/' . $this->request->getVar('oldthumb'));
            }
        }

        $slug = url_title($this->request->getVar('nama_matkul'), '-', true);

        $this->matkulModel->save([
            'id_matkul' => $id_matkul,
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'slug' => $slug,
            'desk_matkul' => $this->request->getVar('desk_matkul'),
            'prodi' => $this->request->getVar('prodi'),
            'thumbnail' => $thumbname
        ]);

        return redirect()->to('mata_kuliah');
    }
}
