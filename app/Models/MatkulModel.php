<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table      = 'mata_kuliah';
    protected $primaryKey = 'id_matkul';

    protected $useAutoIncrement = true;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';

    public function getMatkul($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
