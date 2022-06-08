<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function getData() 
    {
        $builder = $this->db->table('user_workouts');
        $builder->select()->orderBy('user_workoutid', 'DESC');
        $workouts = $builder->get(4);
        $this->db->close();
        return $workouts;
    }
    function getRandomData() {

        $builder = $this->db->table('workouts');
        $builder->select()->orderBy("id", 'RANDOM');
        $randomworkouts = $builder->get(12);
        $this->db->close();
        return $randomworkouts;

    }
}