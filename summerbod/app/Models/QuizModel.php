<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel extends Model
{
    function getData(){
        $builder = $this->db->table('quiz');
        $builder->select()->orderBy('id', 'RANDOM');
        $questions = $builder->get(4);
        $this->db->close();
        return $questions;
    }

}