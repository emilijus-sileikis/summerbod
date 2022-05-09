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
            'password' => password_hash('123456789', PASSWORD_DEFAULT)
        ]
		[
            'name' => 'Emilijus',
            'email' => 'emilijus@yahoo.com',
            'password' => password_hash('123456789', PASSWORD_DEFAULT)
        ],
		[
            'name' => 'Nazar',
            'email' => 'nazar@nocap.com',
            'password' => password_hash('123456789', PASSWORD_DEFAULT)
        ],
		[
            'name' => 'Chad',
            'email' => 'gigachad@gmail.com',
            'password' => password_hash('123456789', PASSWORD_DEFAULT)
        ],
		[
            'name' => 'Test',
            'email' => 'test@hotmail.com',
            'password' => password_hash('123456789', PASSWORD_DEFAULT)
        ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}