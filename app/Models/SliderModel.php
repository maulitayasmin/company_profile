<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'tb_slider';
    protected $primaryKey = 'id_slider';

    // Kolom yang dapat diisi
    protected $allowedFields = [
        'foto_slider1',
        'foto_slider2',
        'foto_slider3',
        'caption_slider_id',
        'caption_slider_en',
        'created_at',
        'updated_at',
    ];

    // Aktifkan penggunaan timestamp otomatis
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Atur validasi (opsional)
    protected $validationRules = [
        'foto_slider1' => 'permit_empty|string|max_length[255]',
        'foto_slider2' => 'permit_empty|string|max_length[255]',
        'foto_slider3' => 'permit_empty|string|max_length[255]',
        'caption_slider_id' => 'permit_empty|string',
        'caption_slider_en' => 'permit_empty|string',
    ];

    protected $validationMessages = [];
    protected $skipValidation     = false;
}
