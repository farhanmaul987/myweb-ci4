<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table      = 'materi';
    protected $primaryKey = 'id_materi';

    protected $useAutoIncrement = true;

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}
