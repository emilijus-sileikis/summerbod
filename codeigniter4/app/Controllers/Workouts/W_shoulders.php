<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Modules\WorkoutsModel;

class W_shoulders extends BaseController
{
    public function index()
    {
        $name = 'Shoulders';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_shoulders', $data);
    }
}