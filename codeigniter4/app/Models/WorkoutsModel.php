<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkoutsModel extends Model
{   private $group;
    private $name;

    function checkGroup($name){
        switch ($name) {
            case "Abdominals":
                $group=$name;
                getData($group);
                break;
            case "Biceps":
                $group=$name;
                getData($group);
                break;
            case "Calves":
                $group=$name;
                getData($group);
                break;
            case "Chest":
                $group=$name;
                getData($group);
                break;
            case "Forearms":
                $group=$name;
                getData($group);
                break;
            case "Glutes":
                $group=$name;
                getData($group);
                break;
            case "Hamstrings":
                $group=$name;
                getData($group);
                break;
            case "Lats":
                $group=$name;
                getData($group);
                break;
            case "Lower-back":
                $group=$name;
                getData($group);
                break;
            case "Quads":
                $group=$name;
                getData($group);
                break;
            case "Shoulders":
                $group=$name;
                getData($group);
                break;
            case "Traps":
                $group=$name;
                getData($group);
                break;
            case "Traps mid-back":
                $group=$name;
                getData($group);
                break;
            case "Triceps":
                $group=$name;
                getData($group);
                break;
        }
    }

    function getData($group){
        $builder = $this->db->table('user_workouts');

        if(isset($_POST['but_sort_1'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Beginner')->orWhere('user_category', $group)->where('user_difficulty', 'Intermediate')->orWhere('user_category', $group)->where('user_difficulty', 'Hard')->orderBy('user_difficulty', 'ASC');
        }
        else if(isset($_POST['but_sort_2'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Beginner')->orWhere('user_category', $group)->where('user_difficulty', 'Intermediate')->orWhere('user_category', $group)->where('user_difficulty', 'Hard')->orderBy('user_difficulty', 'DESC');
        }
        else if(isset($_POST['but_sort_3'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Beginner')->orWhere('user_category', $group)->where('user_difficulty', 'Intermediate')->orWhere('user_category', $group)->where('user_difficulty', 'Hard')->orderBy('user_name', 'ASC');
        }
        else if(isset($_POST['but_sort_4'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Beginner')->orWhere('user_category', $group)->where('user_difficulty', 'Intermediate')->orWhere('user_category', $group)->where('user_difficulty', 'Hard')->orderBy('user_name', 'DESC');
        }
        else if(isset($_POST['but_filter_1'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Beginner');
        }
        else if(isset($_POST['but_filter_2'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Intermediate');
        }
        else if(isset($_POST['but_filter_3'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Hard');
        }
        else if(isset($_POST['but_clear'])) {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Beginner')->orWhere('user_category', $group)->where('user_difficulty', 'Intermediate')->orWhere('user_category', $group)->where('user_difficulty', 'Hard');
        }
        else {
            $builder->select()->where('user_category', $group)->where('user_difficulty', 'Beginner')->orWhere('user_category', $group)->where('user_difficulty', 'Intermediate')->orWhere('user_category', $group)->where('user_difficulty', 'Hard');
        }
        
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

}

/*
if(isset($_POST['but_sort_1'])) {
            $builder->select()->orderBy('user_difficulty', 'ASC');
        }
        else if(isset($_POST['but_sort_2'])) {
            $builder->select()->orderBy('user_difficulty', 'DESC');
        }
        else if(isset($_POST['but_sort_3'])) {
            $builder->select()->orderBy('user_name', 'ASC');
        }
        else if(isset($_POST['but_sort_4'])) {
            $builder->select()->orderBy('user_name', 'DESC');
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
            $builder->select();
        }
        else {
            $builder->select();
        }
*/