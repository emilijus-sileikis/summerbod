<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'question' => 'What type of exercise uses body weight for resistance in a rhytmic manner?',
            'image' => 'NULL',
            'choice_1' => 'Calisthenics',
            'choice_2' => 'Powerlifting',
            'choice_3' => 'Yoga',
            'choice_4' => 'Pilates',
            'answer' => '1'
        ],
        [
            'question' => 'When should you do your warmups?',
            'image' => base_url('assets/images/lol.gif'),
            'choice_1' => 'After waking up',
            'choice_2' => 'After a workout',
            'choice_3' => 'Before going to bed',
            'choice_4' => 'Right before a workout',
            'answer' => '4'
        ],
        [
            'question' => 'When doing strenght and endurance training, it is best to start with?',
            'image' => 'NULL',
            'choice_1' => 'Pull ups',
            'choice_2' => 'Light weights',
            'choice_3' => 'Body weight resistance',
            'choice_4' => 'Heavy weights',
            'answer' => '3'
        ],
        [
            'question' => 'Latest version of Microsoft Windows?',
            'image' => base_url('assets/images/lol.gif'),
            'choice_1' => 'Window XP',
            'choice_2' => 'Windows 10',
            'choice_3' => 'Windows 11',
            'choice_4' => 'Windows 95',
            'answer' => '3'
        ],
        ];

        $this->db->table('quiz')->insertBatch($data);
    }
}
