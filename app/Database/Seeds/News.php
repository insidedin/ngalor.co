<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        $news_data = [
            [
                'title' => 'Selamat datang Codeigniter',
                'slug' => 'codeigniter-intro',
                'content' => 'Pengenalan codeigniter untuk pemula'
            ],
            [
                'title' => 'Helo World',
                'slug' => 'hello-world',
                'content' => 'Contoh Artikel hello world '
            ],
            [
                'title' => 'Meetup komunitas Codeigniter',
                'slug' => 'codeigniter-meetup',
                'content' => 'Seru sekali meetup perdana komunitas codeigniter'
            ],
        ];

        foreach ($news_data as $data) {
            $this->db->table('news')->insert($data);
        }
    }
}
