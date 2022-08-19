<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkoutsModel extends Model
{
    function getSort($order, $opt, $group)
    {   
        $builder = $this->db->table('workouts');
        $diff = ['Warm-up'];
        $builder->select()->where('category', $group)->whereNotIn('difficulty', $diff)->orderBy($order, $opt);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function getDifficulty($diff, $group)
    {
        $builder = $this->db->table('workouts');
        $builder->select()->where('category', $group)->where('difficulty', $diff);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function getData($group)
    {
        $builder = $this->db->table('workouts');
        $diff = ['Warm-up'];
        $builder->select()->where('category', $group)->whereNotIn('difficulty', $diff);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

}