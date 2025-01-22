<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbMeta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_meta' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_halaman' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'meta_desc_id' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'meta_desc_en' => [
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
        $this->forge->addPrimaryKey('id_meta');

        // Membuat tabel
        $this->forge->createTable('tb_meta');
    }

    public function down()
    {
        // Menghapus tabel
        $this->forge->dropTable('tb_meta');
    }
}
