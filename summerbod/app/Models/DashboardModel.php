<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    function getUsers(){
        $builder = $this->db->table('users');
        $builder->select()->orderBy('id', 'DESC');
        $users = $builder->get();
        $this->db->close();
        return $users;
    }

    function getQuiz(){
        $builder = $this->db->table('quiz');
        $builder->select()->orderBy('id', 'DESC');;
        $quiz = $builder->get();
        $this->db->close();
        return $quiz;
    }

    function getWorkouts(){
        $builder = $this->db->table('workouts');
        $builder->select()->orderBy('id', 'DESC');;
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function getUsr_Wrkt(){
        $builder = $this->db->table('user_workouts, users');
        $builder->select()->orderBy('user_workoutid', 'DESC');
        $usr_wrkt = $builder->get();
        $this->db->close();
        return $usr_wrkt;
    }

    public function delUser($id = null)
    {

        $builder = $this->db->table('users');
        $builder->delete(['id' => $id]);
        $usr = $builder->get();
        $this->db->close();
        return $usr;
    
    }

    public function delUserWorkout($id = null)
    {

        $builder = $this->db->table('user_workouts');
        $builder->delete(['user_workoutid' => $id]);
        $usr = $builder->get();
        $this->db->close();
        return $usr;
    
    }

    public function delWorkout($id = null)
    {

        $builder = $this->db->table('workouts');
        $builder->delete(['id' => $id]);
        $usr = $builder->get();
        $this->db->close();
        return $usr;
    
    }

    public function delQuestion($id = null)
    {

        $builder = $this->db->table('quiz');
        $builder->delete(['id' => $id]);
        $usr = $builder->get();
        $this->db->close();
        return $usr;
    
    }

}