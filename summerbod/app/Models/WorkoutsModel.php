<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkoutsModel extends Model
{   
    function getSort($order, $opt)
    {   
        $builder = $this->db->table('workouts');
        $diff = ['Warm-up'];
        $builder->select()->whereNotIn('difficulty', $diff)->orderBy($order, $opt);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function getDifficulty($diff)
    {
        $builder = $this->db->table('workouts');
        $builder->select()->where('difficulty', $diff);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

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