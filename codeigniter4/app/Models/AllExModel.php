<?php

namespace App\Models;

use CodeIgniter\Model;

class AllExModel extends Model
{
    function getData(){
        $builder = $this->db->table('workouts');

        if(isset($_POST['but_sort_1'])) {
            $builder->select()->where('difficulty', 'Beginner')->orWhere('difficulty', 'Intermediate')->orWhere('difficulty', 'Hard')->orderBy('difficulty', 'ASC');
        }
        else if(isset($_POST['but_sort_2'])) {
            $builder->select()->where('difficulty', 'Beginner')->orWhere('difficulty', 'Intermediate')->orWhere('difficulty', 'Hard')->orderBy('difficulty', 'DESC');
        }
        else if(isset($_POST['but_sort_3'])) {
            $builder->select()->where('difficulty', 'Beginner')->orWhere('difficulty', 'Intermediate')->orWhere('difficulty', 'Hard')->orderBy('name', 'ASC');
        }
        else if(isset($_POST['but_sort_4'])) {
            $builder->select()->where('difficulty', 'Beginner')->orWhere('difficulty', 'Intermediate')->orWhere('difficulty', 'Hard')->orderBy('name', 'DESC');
        }
        else if(isset($_POST['but_filter_1'])) {
            $builder->select()->where('difficulty', 'Beginner');
        }
        else if(isset($_POST['but_filter_2'])) {
            $builder->select()->where('difficulty', 'Intermediate');
        }
        else if(isset($_POST['but_filter_3'])) {
            $builder->select()->where('difficulty', 'Hard');
        }
        else if(isset($_POST['but_clear'])) {
            $builder->select()->where('difficulty', 'Beginner')->orWhere('difficulty', 'Intermediate')->orWhere('difficulty', 'Hard');
        }
        else {
            $builder->select()->where('difficulty', 'Beginner')->orWhere('difficulty', 'Intermediate')->orWhere('difficulty', 'Hard');
        }
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

}