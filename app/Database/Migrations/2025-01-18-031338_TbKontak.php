<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbKontak extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kontak' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'deskripsi_kontak_id' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'deskripsi_kontak_en' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Menentukan primary key
        $this->forge->addPrimaryKey('id_kontak');

        // Membuat tabel
        $this->forge->createTable('tb_kontak');
    }

    public function down()
    {
        // Menghapus tabel
        $this->forge->dropTable('tb_kontak');
    }
}
