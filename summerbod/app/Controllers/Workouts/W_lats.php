<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\WorkoutsModel;

class W_lats extends BaseController
{
    public function index()
    {
        $name = 'Lats';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_lats', $data);
    }
}