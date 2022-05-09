<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Models\WorkoutsModel;

class W_traps extends BaseController
{
    public function index()
    {
        $name = 'Traps';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_traps', $data);
    }
}