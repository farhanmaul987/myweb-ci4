<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class ProdiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_prodi'    => 'Teknik Sipil',
                'fakultas'      => 'Fakultas Teknik',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ],
            [
                'nama_prodi'    => 'Teknik Mesin',
                'fakultas'      => 'Fakultas Teknik',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO prodi (nama_prodi, fakultas, created_at, updated_at) VALUES(:nama_prodi:, :fakultas:, :created_at:, :updated_at:)', $data);

        // Using Query Builder

        // Function Insert hanya untuk insert 1 data
        // $this->db->table('prodi')->insert($data);

        // Function InsertBatch untuk insert banyak data
        $this->db->table('prodi')->InsertBatch($data);
    }
}
