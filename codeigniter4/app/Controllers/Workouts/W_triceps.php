<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Modules\WorkoutsModel;

class W_triceps extends BaseController
{
    public function index()
    {
        $name = 'Triceps';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_triceps', $data);
    }
}