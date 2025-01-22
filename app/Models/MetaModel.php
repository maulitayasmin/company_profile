<?php

namespace App\Models;

use CodeIgniter\Model;

class MetaModel extends Model
{
    protected $table = 'tb_meta'; // Nama tabel di database
    protected $primaryKey = 'id_meta'; // Primary key tabel

    protected $useAutoIncrement = true; // Auto increment untuk primary key

    protected $returnType = 'array'; // Format data yang dikembalikan
    protected $useSoftDeletes = false; // Tidak menggunakan soft delete

    protected $allowedFields = [
        'nama_halaman',
        'title_id',
        'title_en',
        'meta_desc_id',
        'meta_desc_en',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true; // Menggunakan timestamps (created_at dan updated_at otomatis)
    protected $createdField = 'created_at'; // Kolom untuk created_at
    protected $updatedField = 'updated_at'; // Kolom untuk updated_at
    protected $deletedField = null; // Tidak ada kolom deleted_at

    protected $validationRules = [
        'nama_halaman'   => 'required|string|max_length[255]',
        'title_id'       => 'required|string|max_length[255]',
        'title_en'       => 'required|string|max_length[255]',
        'meta_desc_id'   => 'permit_empty|string',
        'meta_desc_en'   => 'permit_empty|string',
    ];

    protected $validationMessages = [];

    protected $skipValidation = false; // Jangan skip validasi
}
