<?php

namespace App\Models;

use CodeIgniter\Model;

class AllExModel extends Model
{
    function getSort($order, $opt)
    {   
        $builder = $this->db->table('workouts');
        $diff = ['Warm-up'];
        $builder->select()->whereNotIn('difficulty', $diff)->orderBy($order, $opt);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function getDifficulty($diff)
    {
        $builder = $this->db->table('workouts');
        $builder->select()->where('difficulty', $diff);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function getData()
    {
        $builder = $this->db->table('workouts');
        $diff = ['Warm-up'];
        $builder->select()->whereNotIn('difficulty', $diff);
        $workouts = $builder->get();
        $this->db->close();
        return $workouts;
    }

    function insertFav($id)
    {
        $builder = $this->db->table('fav_workouts');

        if ($builder->select()->where('user_id', session()->get('id'))->where('ex_id', $id)->countAllResults() > 0) 
        {

            $_SESSION['error'] = 'Exercise is already in your favorites list!';
            session()->markAsFlashdata("error");

            return redirect()->to('public/Workouts/w_all_exercises');
        }
        else 
        {

            $data = 
            [
                'ex_id' => $id,
                'user_id'  => session()->get('id'),
            ];

            $_SESSION['message'] = 'Exercise added to the favorite list successfuly!';
            session()->markAsFlashdata("message");
        
            $builder->insert($data);
        }

        $this->db->close();
    }

    function getFav()
    {
        $builder = $this->db->table('fav_workouts');
        $builder->select()->where('user_id', session()->get('id'));
        $favorites = $builder->get();
        $this->db->close();
        return $favorites;
    }

    function removeFav($id)
    {
        $builder = $this->db->table('fav_workouts');
        $builder->where('user_id', session()->get('id'))->delete(['ex_id' => $id]);
        $workout = $builder->get();
        $this->db->close();
        return $workout;
    }

}