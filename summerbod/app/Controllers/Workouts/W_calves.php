<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\WorkoutsModel;

class W_calves extends BaseController
{
    public function index()
    {
        $name = 'Calves';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_calves', $data);
    }
}