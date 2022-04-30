<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Modules\WorkoutsModel;

class W_lowerback extends BaseController
{
    public function index()
    {
        $name = 'Lower-back';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_lowerback', $data);
    }
}