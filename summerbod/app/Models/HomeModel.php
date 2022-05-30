<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function getData() {
        $builder = $this->db->table('users, user_workouts');
        $builder->select('user_image, user_name, user_category, user_difficulty, name')->where('id', 1);
        $workouts = $builder->get(4);
        $this->db->close();
        return $workouts;
    }
}