<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChangeGambarColumnType extends Migration
{
    public function up()
    {
        $fields = [
            'gambar' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ];

        $this->forge->modifyColumn('pengaduan', $fields);
    }

    public function down()
    {
        $fields = [
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ];

        $this->forge->modifyColumn('pengaduan', $fields);
    }
}
