<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoritesModel extends Model
{
    function getData(){

        $builder = $this->db->table('fav_workouts');
        $builder->select()->where('user_id', session()->get('id'))->join('workouts', 'fav_workouts.ex_id = workouts.id');
    
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }
}
