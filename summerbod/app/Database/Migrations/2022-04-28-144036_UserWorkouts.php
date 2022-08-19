<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class UserWorkouts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_workoutid' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
			'user_image' => [
                'type' => 'TEXT',
                'null' => false,
			],
			'user_category' => [
                'type' => 'ENUM',
                'constraint' => ['Traps', 'Traps mid-back', 'Shoulders', 'Chest', 'Biceps', 'Forearms', 'Abdominals', 'Quads', 'Calves', 'Triceps', 'Lats', 'Lower-back', 'Glutes', 'Hamstrings'],
                'default' => 'Traps',
            ],
            'user_name' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
            ],
			'user_difficulty' => [
                'type' => 'ENUM',
                'constraint' => ['Beginner', 'Intermediate', 'Hard', 'Warm-up'],
                'default' => 'Beginner',
            ],
            'user_descr' => [
                'type' => 'TEXT',
                'null' => true,
			],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
        ]);
        $this->forge->addPrimaryKey('user_workoutid');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('user_workouts');
    }

    public function down()
    {
        $this->forge->dropTable('user_workouts');
    }
}