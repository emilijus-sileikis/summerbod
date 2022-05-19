<?php
  
namespace App\Database\Migrations;  
use CodeIgniter\Database\Migration;

class FavWorkouts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ex_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => '11',
				'unsigned' => true
            ],
        ]);
        $this->forge->addPrimaryKey('ex_id');
		$this->forge->addPrimaryKey('user_id');
		$this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('ex_id', 'workouts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fav_workouts');
    }

    public function down()
    {
        $this->forge->dropTable('fav_workouts');
    }
}