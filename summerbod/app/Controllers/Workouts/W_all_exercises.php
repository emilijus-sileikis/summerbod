<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\AllExModel;

class W_all_exercises extends BaseController
{   
    public function index()
    {
        $title = 'All Exercises';
        $workoutModel = new \App\Models\AllExModel();

            if(isset($_POST['diff_asc'])) {
                $order = 'difficulty';
                $opt = 'ASC';
                $data['workouts'] = $workoutModel->getSort($order, $opt);
            }
            else if(isset($_POST['diff_desc'])) {
                $order = 'difficulty';
                $opt = 'DESC';
                $data['workouts'] = $workoutModel->getSort($order, $opt);
            }
            else if(isset($_POST['name_asc'])) {
                $order = 'name';
                $opt = 'ASC';
                $data['workouts'] = $workoutModel->getSort($order, $opt);
            }
            else if(isset($_POST['name_desc'])) {
                $order = 'name';
                $opt = 'DESC';
                $data['workouts'] = $workoutModel->getSort($order, $opt);
            }
            else if(isset($_POST['beginner'])) {
                $diff = 'Beginner';
                $data['workouts'] = $workoutModel->getDifficulty($diff);
            }
            else if(isset($_POST['intermediate'])) {
                $diff = 'Intermediate';
                $data['workouts'] = $workoutModel->getDifficulty($diff);
            }
            else if(isset($_POST['hard'])) {
                $diff = 'Hard';
                $data['workouts'] = $workoutModel->getDifficulty($diff);
            }
            else if(isset($_POST['but_clear'])) {
                $data['workouts'] = $workoutModel->getData();
            }
            else {
                $data['workouts'] = $workoutModel->getData();
            }

        $data['favorites'] = $workoutModel->getFav();
        $data['title'] = $title;
        
        return view('workouts/workouts', $data);
    }

    public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);

            return redirect()->to($_SERVER['HTTP_REFERER']);
        }
        else { 
            return redirect()->to('public/login');
        }
    }

    public function remove($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->removeFav($id);
            return redirect()->to($_SERVER['HTTP_REFERER']);
        }
        else { 
            return redirect()->to('public/login');
        }
    }
}