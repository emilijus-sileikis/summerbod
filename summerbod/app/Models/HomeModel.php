<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function getData() {
        $builder = $this->db->table('users, user_workouts');
        $builder->select('user_image, user_name, user_category, user_difficulty, name')->where('id', 1);
        $users = $builder->get(4);
        $this->db->close();
        return $users;
    }
    function getRandomData() {

        $builder = $this->db->table('workouts');
        $builder->select()->orderBy("id", 'RANDOM');
        $randomworkouts = $builder->get(12);
        $this->db->close();
        return $randomworkouts;

    }
}