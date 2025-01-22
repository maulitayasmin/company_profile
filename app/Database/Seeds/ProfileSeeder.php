<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $profilData = [
            [
                'nama_perusahaan' => 'Perusahaan XX',
                'foto_perusahaan' => 'company_photo.jpg',
                'logo_perusahaan' => 'company_logo.jpg',
                'deskripsi_perusahaan_id' => 'Perusahaan xx merupakan perusahaan ternama di Indonesia',
                'deskripsi_perusahaan_en' => 'Company xx is a well-known company in Indonesia',
            ]
        ];
        $this->db->table('tb_profil')->insertBatch($profilData);

    }
}
