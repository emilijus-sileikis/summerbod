<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\AllExModel;

class W_all_exercises extends BaseController
{
    public function index()
    {
        $workoutModel = new \App\Models\AllExModel();
        $data['workouts'] = $workoutModel->getData();
        $data['favorites'] = $workoutModel->getFav();
        return view('w_all_exercises', $data);
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