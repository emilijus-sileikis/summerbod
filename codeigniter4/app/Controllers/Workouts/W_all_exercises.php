<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Modules\AllExModel;

class W_all_exercises extends BaseController
{
    public function index()
    {
        $workoutModel = new \App\Models\AllExModel();
        $data['workouts'] = $workoutModel->getData();
        return view('w_all_exercises', $data);
    }
}