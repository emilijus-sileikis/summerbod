<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'name' => 'Patrik',
            'email' => 'patrik@codeigniter.com',
            'pass' => 'patriklovesci4'
        ],
        [
            'name' => 'Nazar',
            'email' => 'nazar@kliedesiai.com',
            'pass' => 'unixexpert123'
        ]
        ];

        // Using Query Builder
        $this->db->table('user_info')->insertBatch($data);
    }
}