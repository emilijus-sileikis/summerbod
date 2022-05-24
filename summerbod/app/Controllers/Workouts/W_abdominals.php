<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\WorkoutsModel;

class W_abdominals extends BaseController
{
    public function index()
    {
        $name = 'Abdominals';
        $workoutModel = new \App\Models\WorkoutsModel();
        $model = new \App\Models\AllExModel();
        $data['workouts'] = $workoutModel->getData($name);
        $data['favorites'] = $model->getFav();
        return view('w_abdominals', $data);
    }

    public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);

            return redirect()->to('public/Workouts/w_abdominals');
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