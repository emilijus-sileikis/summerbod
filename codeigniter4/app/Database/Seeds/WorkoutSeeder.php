<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Abdominals',
            'name' => 'Plank',
            'difficulty' => 'Beginner',
            'descr' => 'Lie facedown with your forearms on the floor and your hands clasped.
            Extend your legs behind you and rise up onto your toes.
            Keeping your back straight, tighten your core and hold the position for as long as you can.'
        ],
        [
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Glutes',
            'name' => 'Lunge',
            'difficulty' => 'Beginner',
            'descr' => 'Stand with your hands on your hips and your feet hip-width apart.
            Step your right leg forward and slowly lower your body until your left (back) knee is close to or touching the floor and bent at least 90 degrees.
            Return to the starting position and repeat on the other side.'
        ],
        [
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Calves',
            'name' => 'Prone walkout',
            'difficulty' => 'Intermediate',
            'descr' => 'Slowly walk your hands forward, staying on your toes but not moving them forward.
            Next, gradually walk your hands backward to the starting position, maintaining stability and balance.'
        ],
        [
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Shoulders',
            'name' => 'Handstand push-up',
            'difficulty' => 'Hard',
            'descr' => 'Get set in a handstand position against a wall.
            Bend your elbows at a 90-degree angle, doing an upside-down push-up so your head moves toward the floor and your legs remain against the wall.'
        ],
        [
            'image' => base_url('assets/images/workouts/lol.gif'),
            'category' => 'Chest',
            'name' => 'Bench Press',
            'difficulty' => 'Intermediate',
            'descr' => 'Lay flat on the bench with your feet on the ground. With straight arms unrack the bar.
            Lower the bar to your mid chest
            Raise the bar until youve locked your elbows.'
        ]
        ];

        $this->db->table('workouts')->insertBatch($data);
    }
}