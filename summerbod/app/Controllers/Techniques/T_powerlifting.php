<?php

namespace App\Controllers\Techniques;
use App\Controllers\BaseController;
use App\Models\CalisthenicsModel;

class T_powerlifting extends BaseController
{
	public function index()
	{
        $title = 'Powerlifting Exercises';
		$calistModel = new \App\Models\CalisthenicsModel();
		$workoutModel = new \App\Models\AllExModel();
        
        if(isset($_POST['but_sort_1'])) {
            $order = 'difficulty';
            $opt = 'ASC';
            $data['workouts'] = $workoutModel->getSort($order, $opt);
        }
        else if(isset($_POST['but_sort_2'])) {
            $order = 'difficulty';
            $opt = 'DESC';
            $data['workouts'] = $workoutModel->getSort($order, $opt);
        }
        else if(isset($_POST['but_sort_3'])) {
            $order = 'name';
            $opt = 'ASC';
            $data['workouts'] = $workoutModel->getSort($order, $opt);
        }
        else if(isset($_POST['but_sort_4'])) {
            $order = 'name';
            $opt = 'DESC';
            $data['workouts'] = $workoutModel->getSort($order, $opt);
        }
        else if(isset($_POST['but_filter_1'])) {
            $diff = 'Beginner';
            $data['workouts'] = $workoutModel->getDifficulty($diff);
        }
        else if(isset($_POST['but_filter_2'])) {
            $diff = 'Intermediate';
            $data['workouts'] = $workoutModel->getDifficulty($diff);
        }
        else if(isset($_POST['but_filter_3'])) {
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

		return view('workouts/techniques', $data);
	}

	public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);

            return redirect()->to('public/Workouts/t_powerlifting');
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