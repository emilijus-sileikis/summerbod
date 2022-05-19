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
        return view('w_all_exercises', $data);
    }

    public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);
            return redirect()->to('public/Workouts/w_all_exercises');
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
            return redirect()->to('public/favorites');
        }
        else { 
            return redirect()->to('public/login');
        }
    }
}