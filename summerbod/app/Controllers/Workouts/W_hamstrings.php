<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\WorkoutsModel;

class W_hamstrings extends BaseController
{
    public function index()
    {   
        $group = 'Hamstrings';
        $title = 'Hamstrings Exercises';
        $workoutModel = new \App\Models\WorkoutsModel();
        $model = new \App\Models\AllExModel();
        
        if(isset($_POST['but_sort_1'])) {
            $order = 'difficulty';
            $opt = 'ASC';
            $data['workouts'] = $workoutModel->getSort($order, $opt, $group);
        }
        else if(isset($_POST['but_sort_2'])) {
            $order = 'difficulty';
            $opt = 'DESC';
            $data['workouts'] = $workoutModel->getSort($order, $opt, $group);
        }
        else if(isset($_POST['but_sort_3'])) {
            $order = 'name';
            $opt = 'ASC';
            $data['workouts'] = $workoutModel->getSort($order, $opt, $group);
        }
        else if(isset($_POST['but_sort_4'])) {
            $order = 'name';
            $opt = 'DESC';
            $data['workouts'] = $workoutModel->getSort($order, $opt, $group);
        }
        else if(isset($_POST['but_filter_1'])) {
            $diff = 'Beginner';
            $data['workouts'] = $workoutModel->getDifficulty($diff, $group);
        }
        else if(isset($_POST['but_filter_2'])) {
            $diff = 'Intermediate';
            $data['workouts'] = $workoutModel->getDifficulty($diff, $group);
        }
        else if(isset($_POST['but_filter_3'])) {
            $diff = 'Hard';
            $data['workouts'] = $workoutModel->getDifficulty($diff, $group);
        }
        else if(isset($_POST['but_clear'])) {
            $data['workouts'] = $workoutModel->getData($group);
        }
        else {
            $data['workouts'] = $workoutModel->getData($group);
        }

        $data['favorites'] = $model->getFav();
        $data['title'] = $title;

        return view('workouts/workouts', $data);
    }

    public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);

            return redirect()->to('public/Workouts/w_hamstrings');
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