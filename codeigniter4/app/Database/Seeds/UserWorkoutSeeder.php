<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserWorkoutSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'user_id' => '1',
            'user_image' => base_url('assets/images/workouts/lol.gif'),
            'user_category' => 'Abdominals',
            'user_name' => 'Plank',
            'user_difficulty' => 'Beginner',
            'user_descr' => 'Lie facedown with your forearms on the floor and your hands clasped.
            Extend your legs behind you and rise up onto your toes.
            Keeping your back straight, tighten your core and hold the position for as long as you can.'
        ],
        [
            'user_id' => '2',
            'user_image' => base_url('assets/images/workouts/lol.gif'),
            'user_category' => 'Glutes',
            'user_name' => 'Lunge',
            'user_difficulty' => 'Beginner',
            'user_descr' => 'Stand with your hands on your hips and your feet hip-width apart.
            Step your right leg forward and slowly lower your body until your left (back) knee is close to or touching the floor and bent at least 90 degrees.
            Return to the starting position and repeat on the other side.'
        ]
        ];

        $this->db->table('user_workouts')->insertBatch($data);
    }
}