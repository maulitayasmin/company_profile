<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'tb_kontak';
    protected $primaryKey = 'id_kontak';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $allowedFields = [
        'deskripsi_kontak_id',
        'deskripsi_kontak_en',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'deskripsi_kontak_id' => 'permit_empty|string',
        'deskripsi_kontak_en' => 'permit_empty|string',
    ];

    protected $validationMessages = [];

    protected $skipValidation = false;
}
