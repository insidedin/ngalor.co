<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChangeTanggalPengaduanColumnType extends Migration
{
    public function up()
    {
        $fields = [
            'tanggal_pengaduan' => [
                'type' => 'DATE', // Ubah tipe data ke DATE
                'null' => true,    // Atur jika perlu
            ],
        ];

        $this->forge->modifyColumn('pengaduan', $fields); // Ganti 'nama_tabel_anda' dengan nama tabel sebenarnya
    }

    public function down()
    {
        $fields = [
            'tanggal_pengaduan' => [
                'type' => 'DATETIME', // Kembalikan tipe data ke DATETIME jika perlu
            ],
        ];

        $this->forge->modifyColumn('pengaduan', $fields); // Ganti 'nama_tabel_anda' dengan nama tabel sebenarnya
    }
}
