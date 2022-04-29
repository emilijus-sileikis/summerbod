<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Quiz extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'question' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => false,
            ],
            'image' => [
                'type' => 'TEXT',
                'null' => true,
			],
			'choice_1' => [
                'type' => 'TEXT',
                'null' => false,
			],
            'choice_2' => [
                'type' => 'TEXT',
                'null' => false,
			],
            'choice_3' => [
                'type' => 'TEXT',
                'null' => false,
			],
            'choice_4' => [
                'type' => 'TEXT',
                'null' => false,
			],
            'answer' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('quiz');
    }

    public function down()
    {
        $this->forge->dropTable('quiz');
    }
}