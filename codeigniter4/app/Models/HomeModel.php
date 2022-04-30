<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function getData(){
        $builder = $this->db->table('user_info, user_workouts');
        $builder->select('user_image, user_name, user_category, user_difficulty, name')->where('id', 1)->orWhere('id', 2);
        $users = $builder->get(4);
        $this->db->close();
        return $users;
    }

}