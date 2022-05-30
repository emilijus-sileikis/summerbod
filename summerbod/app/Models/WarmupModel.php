<?php

namespace App\Models;

use CodeIgniter\Model;

class WarmupModel extends Model
{
    function getData()
    {
        $builder = $this->db->table('workouts');
        $builder->select()->where('difficulty', 'Warm-up');
        $warmups = $builder->get();
        $this->db->close();
        return $warmups;
    }

}