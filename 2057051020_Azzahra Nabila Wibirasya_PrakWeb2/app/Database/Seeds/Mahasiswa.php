<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
            'npm' => 'darth',
            'nama' => 'darth@theempire.com',
            'alamat' => 'sukarame',
            'created_at' => Time::now(),
            ],
            [
                'npm' => '2057051020',
                'nama' => 'azzahra nabila wibirasya',
                'alamat' => 'sukabumi',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051025',
                'nama' => 'andien wibirefasya',
                'alamat' => 'teluk betung',
                'created_at' => Time::now(),
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
       
    }
}
