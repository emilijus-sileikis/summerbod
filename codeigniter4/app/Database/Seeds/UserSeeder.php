<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'name' => 'Admin',
            'email' => 'summerbod@admin.com',
            'password' => password_hash('nuladna123', PASSWORD_DEFAULT)
        ],
        [
            'name' => 'Patrik',
            'email' => 'patrik@codeigniter.com',
            'password' => password_hash('codeigniter', PASSWORD_DEFAULT)
        ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}