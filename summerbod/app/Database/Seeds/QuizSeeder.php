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
            'image' => 'NULL',
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
            'image' => 'NULL',
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
        [
            'question' => 'What is wrong with this exercise form?',
            'image' => base_url('assets/images/workouts/bad1.gif'),
            'choice_1' => 'Shoulders are too high',
            'choice_2' => 'Legs extended too little',
            'choice_3' => 'Legs extended too much',
            'choice_4' => 'Exercise is done too slow',
            'answer' => '1'
        ],
        [
            'question' => 'What is wrong with this exercise form?',
            'image' => base_url('assets/images/workouts/bad2.gif'),
            'choice_1' => 'Legs are too close',
            'choice_2' => 'Bad back placement',
            'choice_3' => 'Legs are too wide apart',
            'choice_4' => 'Using the wrong bar',
            'answer' => '2'
        ],
        [
            'question' => 'What is wrong with this exercise form?',
            'image' => base_url('assets/images/workouts/bad3.gif'),
            'choice_1' => 'Bad grip',
            'choice_2' => 'Pulling up too high',
            'choice_3' => 'Use of inertia',
            'choice_4' => 'Fully extending arms',
            'answer' => '3'
        ],
        [
            'question' => 'What is wrong with this exercise form?',
            'image' => base_url('assets/images/workouts/bad4.gif'),
            'choice_1' => 'Facing wrong direction',
            'choice_2' => 'Dipping too deep',
            'choice_3' => 'Crossed legs',
            'choice_4' => 'Looking up',
            'answer' => '4'
        ],
        [
            'question' => 'What is wrong with this exercise form?',
            'image' => base_url('assets/images/workouts/bad5.gif'),
            'choice_1' => 'Nothing',
            'choice_2' => 'Bottom too high up',
            'choice_3' => 'Bad arm placement',
            'choice_4' => 'Bottom too low',
            'answer' => '2'
        ],
        [
            'question' => 'Which muscle group does this exercise target?',
            'image' => base_url('assets/images/workouts/Gorilla row.gif'),
            'choice_1' => 'Traps mid-back',
            'choice_2' => 'Biceps',
            'choice_3' => 'Triceps',
            'choice_4' => 'Lats',
            'answer' => '4'
        ],
        [
            'question' => 'Which muscle group does this exercise target?',
            'image' => base_url('assets/images/workouts/Plyometric push-up.gif'),
            'choice_1' => 'Chest',
            'choice_2' => 'Calves',
            'choice_3' => 'Shoulders',
            'choice_4' => 'Glutes',
            'answer' => '1'
        ],
        [
            'question' => 'Which muscle group does this exercise target?',
            'image' => base_url('assets/images/workouts/L seat.gif'),
            'choice_1' => 'Quads',
            'choice_2' => 'Traps',
            'choice_3' => 'Abdominals',
            'choice_4' => 'Forearms',
            'answer' => '3'
        ],
        ];

        $this->db->table('quiz')->insertBatch($data);
    }
}
