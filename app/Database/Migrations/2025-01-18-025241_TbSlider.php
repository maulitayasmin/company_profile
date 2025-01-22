<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbSlider extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_slider' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'foto_slider1' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'foto_slider2' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'foto_slider3' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'caption_slider_id' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'caption_slider_en' => [
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
        $this->forge->addPrimaryKey('id_slider');

        // Membuat tabel
        $this->forge->createTable('tb_slider');
    }

    public function down()
    {
        // Menghapus tabel
        $this->forge->dropTable('tb_slider');
    }
}
