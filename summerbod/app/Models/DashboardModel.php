<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    function getUsers(){
        $builder = $this->db->table('users');
        $builder->select();
        $users = $builder->get();
        $this->db->close();
        return $users;
    }

    function getQuiz(){
        $builder = $this->db->table('quiz');
        $builder->select();
        $quiz = $builder->get();
        $this->db->close();
        return $quiz;
    }

    function getWorkouts(){
        $builder = $this->db->table('workouts');
        $builder->select();
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function getUsr_Wrkt(){
        $builder = $this->db->table('user_workouts');
        $builder->select();
        $usr_wrkt = $builder->get();
        $this->db->close();
        return $usr_wrkt;
    }

}