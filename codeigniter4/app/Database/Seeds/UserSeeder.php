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
            'password' => 'nuladna123'
        ],
        [
            'name' => 'Patrik',
            'email' => 'patrik@codeigniter.com',
            'password' => 'codeigniter'
        ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}