<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table = 'tb_profil';
    protected $primaryKey = 'id_perusahaan';

    protected $allowedFields = [
        'nama_perusahaan',
        'foto_perusahaan',
        'logo_perusahaan',
        'deskripsi_perusahaan_id',
        'deskripsi_perusahaan_en',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [
        'nama_perusahaan' => 'required|string|max_length[255]',
        'foto_perusahaan' => 'required|string|max_length[255]',
        'logo_perusahaan' => 'required|string|max_length[255]',
        'deskripsi_perusahaan_id' => 'permit_empty|string',
        'deskripsi_perusahaan_en' => 'permit_empty|string',
    ];

    protected $validationMessages = [];
    protected $skipValidation     = false;
}
