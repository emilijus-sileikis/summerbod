<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Workouts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
			'image' => [
                'type' => 'TEXT',
                'null' => false,
			],
			'category' => [
                'type' => 'ENUM',
                'constraint' => ['Traps', 'Traps mid-back', 'Shoulders', 'Chest', 'Biceps', 'Forearms', 'Abdominals', 'Quads', 'Calves', 'Triceps', 'Lats', 'Lower-back', 'Glutes', 'Hamstrings'],
                'default' => 'Traps',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
            ],
			'difficulty' => [
                'type' => 'ENUM',
                'constraint' => ['Beginner', 'Intermediate', 'Hard', 'Warm-up'],
                'default' => 'Beginner',
            ],
            'descr' => [
                'type' => 'TEXT',
                'null' => true,
			],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('workouts');
    }

    public function down()
    {
        $this->forge->dropTable('workouts');
    }
}