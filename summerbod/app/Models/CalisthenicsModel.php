<?php

namespace App\Models;

use CodeIgniter\Model;

class CalisthenicsModel extends Model
{
    function getData()
    {
        $builder = $this->db->table('workouts');
        $diff = ['Warm-up'];
        $builder->select()->whereNotIn('difficulty', $diff);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

}