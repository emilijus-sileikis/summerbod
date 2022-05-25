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
            'image' => base_url('assets/images/workouts/lol.gif'),
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
            'question' => 'Which of these exercises targets triceps?',
            'image' => base_url('assets/images/workouts/lol.gif'),
            'choice_1' => 'Hammer Curls',
            'choice_2' => 'Bench Press',
            'choice_3' => 'Diamond Push-ups',
            'choice_4' => 'Back Extensions',
            'answer' => '3'
        ],
		[
            'question' => 'How much water it is recommended to drink before a workout?',
            'image' => 'NULL',
            'choice_1' => '600ml-700ml',
            'choice_2' => '800ml-900ml',
            'choice_3' => '100ml-200ml',
            'choice_4' => '400ml-500ml',
            'answer' => '4'
        ],
		[
            'question' => 'Which one of these is a recommended way to prevent injuries?',
            'image' => 'NULL',
            'choice_1' => 'Keep pushing yourself',
            'choice_2' => 'Let your body rest',
            'choice_3' => 'Ignore the pain',
            'choice_4' => 'Do shorter breaks',
            'answer' => '2'
        ],
		[
            'question' => 'Which of these exercises targets calves?',
            'image' => 'NULL',
            'choice_1' => 'Prone walkout',
            'choice_2' => 'Reverse fly',
            'choice_3' => 'Plank',
            'choice_4' => 'Hamstring Curl',
            'answer' => '1'
        ],
        ];

        $this->db->table('quiz')->insertBatch($data);
    }
}
