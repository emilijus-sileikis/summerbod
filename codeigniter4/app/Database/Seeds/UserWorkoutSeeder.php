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
            'user_image' => 'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
            'user_category' => 'Abdominals',
            'user_name' => 'Plank',
            'user_difficulty' => 'Beginner',
            'user_descr' => 'Lie facedown with your forearms on the floor and your hands clasped.
            Extend your legs behind you and rise up onto your toes.
            Keeping your back straight, tighten your core and hold the position for as long as you can.'
        ],
        [
            'user_id' => '1',
            'user_image' => 'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
            'user_category' => 'Glutes',
            'user_name' => 'Lunge',
            'user_difficulty' => 'Beginner',
            'user_descr' => 'Stand with your hands on your hips and your feet hip-width apart.
            Step your right leg forward and slowly lower your body until your left (back) knee is close to or touching the floor and bent at least 90 degrees.
            Return to the starting position and repeat on the other side.'
        ],
        [
            'user_id' => '1',
            'user_image' => 'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
            'user_category' => 'Calves',
            'user_name' => 'Prone walkout',
            'user_difficulty' => 'Intermediate',
            'user_descr' => 'Slowly walk your hands forward, staying on your toes but not moving them forward.
            Next, gradually walk your hands backward to the starting position, maintaining stability and balance.'
        ],
        [
            'user_id' => '1',
            'user_image' => 'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
            'user_category' => 'Shoulders',
            'user_name' => 'Handstand push-up',
            'user_difficulty' => 'Hard',
            'user_descr' => 'Get set in a handstand position against a wall.
            Bend your elbows at a 90-degree angle, doing an upside-down push-up so your head moves toward the floor and your legs remain against the wall.'
        ],
        [
            'user_id' => '1',
            'user_image' => 'iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEWbbE4OECL3AAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC',
            'user_category' => 'Chest',
            'user_name' => 'Bench Press',
            'user_difficulty' => 'Intermediate',
            'user_descr' => 'Lay flat on the bench with your feet on the ground. With straight arms unrack the bar.
            Lower the bar to your mid chest
            Raise the bar until youve locked your elbows.'
        ]
        ];

        // Using Query Builder
        $this->db->table('user_workouts')->insertBatch($data);
    }
}