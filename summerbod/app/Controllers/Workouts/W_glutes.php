<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\WorkoutsModel;

class W_glutes extends BaseController
{
    public function index()
    {
        $name = 'Glutes';
        $title = 'Glutes Exercises';
        $workoutModel = new \App\Models\WorkoutsModel();
        $model = new \App\Models\AllExModel();
        $data['workouts'] = $workoutModel->getData($name);
        $data['favorites'] = $model->getFav();
        $data['title'] = $title;

        return view('workouts/workouts', $data);
    }

    public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);

            return redirect()->to('public/Workouts/w_glutes');
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