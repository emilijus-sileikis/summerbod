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

    function insertFav($id){
        $builder = $this->db->table('fav_workouts');

        if ($builder->select()->where('user_id', session()->get('id'))->where('ex_id', $id)->countAllResults() > 0) {

            $_SESSION['error'] = 'Exercise is already in your favorites list!';
            session()->markAsFlashdata("error");

            return redirect()->to('public/Workouts/w_all_exercises');
        }
        else {

        $data = [
            'ex_id' => $id,
            'user_id'  => session()->get('id'),
        ];

        $_SESSION['message'] = 'Exercise added to the favorite list successfuly!';
        session()->markAsFlashdata("message");
        
        $builder->insert($data);
        }
    }

    function getFav(){
        $builder = $this->db->table('fav_workouts');
        $builder->select()->where('user_id', session()->get('id'));
        $favorites = $builder->get();
        $this->db->close();
        return $favorites;
    }

    function removeFav($id){
        $builder = $this->db->table('fav_workouts');
        $builder->where('user_id', session()->get('id'))->delete(['ex_id' => $id]);
        $workout = $builder->get();
        $this->db->close();
        return $workout;
    }

}