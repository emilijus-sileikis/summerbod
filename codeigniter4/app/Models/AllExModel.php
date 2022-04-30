<?php

namespace App\Models;

use CodeIgniter\Model;

class AllExModel extends Model
{
    function getData(){
        $builder = $this->db->table('user_workouts');

        if(isset($_POST['but_sort_1'])) {
            $builder->select()->where('user_difficulty', 'Beginner')->orWhere('user_difficulty', 'Intermediate')->orWhere('user_difficulty', 'Hard')->orderBy('user_difficulty', 'ASC');
        }
        else if(isset($_POST['but_sort_2'])) {
            $builder->select()->where('user_difficulty', 'Beginner')->orWhere('user_difficulty', 'Intermediate')->orWhere('user_difficulty', 'Hard')->orderBy('user_difficulty', 'DESC');
        }
        else if(isset($_POST['but_sort_3'])) {
            $builder->select()->where('user_difficulty', 'Beginner')->orWhere('user_difficulty', 'Intermediate')->orWhere('user_difficulty', 'Hard')->orderBy('user_name', 'ASC');
        }
        else if(isset($_POST['but_sort_4'])) {
            $builder->select()->where('user_difficulty', 'Beginner')->orWhere('user_difficulty', 'Intermediate')->orWhere('user_difficulty', 'Hard')->orderBy('user_name', 'DESC');
        }
        else if(isset($_POST['but_filter_1'])) {
            $builder->select()->where('user_difficulty', 'Beginner');
        }
        else if(isset($_POST['but_filter_2'])) {
            $builder->select()->where('user_difficulty', 'Intermediate');
        }
        else if(isset($_POST['but_filter_3'])) {
            $builder->select()->where('user_difficulty', 'Hard');
        }
        else if(isset($_POST['but_clear'])) {
            $builder->select()->where('user_difficulty', 'Beginner')->orWhere('user_difficulty', 'Intermediate')->orWhere('user_difficulty', 'Hard');
        }
        else {
            $builder->select()->where('user_difficulty', 'Beginner')->orWhere('user_difficulty', 'Intermediate')->orWhere('user_difficulty', 'Hard');
        }
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

}