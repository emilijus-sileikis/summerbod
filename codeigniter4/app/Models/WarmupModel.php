<?php

namespace App\Models;

use CodeIgniter\Model;

class WarmupModel extends Model
{
    function getData(){
        $builder = $this->db->table('user_workouts');
        $builder->select()->where('user_difficulty', 'Warm-up');
        $warmups = $builder->get();
        $this->db->close();
        return $warmups;
    }

}