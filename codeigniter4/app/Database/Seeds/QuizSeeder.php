<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'question' => '1 + 1 = ?',
            'image' => 'NULL',
            'choice_1' => '2',
            'choice_2' => '3',
            'choice_3' => '4',
            'choice_4' => '5',
            'answer' => '1'
        ],
        [
            'question' => '2 + 2 = ?',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
            'choice_1' => '6',
            'choice_2' => '8',
            'choice_3' => '10',
            'choice_4' => '4',
            'answer' => '4'
        ],
        [
            'question' => 'Highest Mountain in the World.',
            'image' => 'NULL',
            'choice_1' => 'Mt. Carmel',
            'choice_2' => 'Mt. Liza',
            'choice_3' => 'Mt. Everest',
            'choice_4' => 'Mt. John',
            'answer' => '3'
        ],
        [
            'question' => 'Latest version of Microsoft Windows?',
            'image' => 'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
            'choice_1' => 'Window XP',
            'choice_2' => 'Windows 10',
            'choice_3' => 'Windows 11',
            'choice_4' => 'Windows 95',
            'answer' => '3'
        ],
        ];

        // Using Query Builder
        $this->db->table('quiz')->insertBatch($data);
    }
}
