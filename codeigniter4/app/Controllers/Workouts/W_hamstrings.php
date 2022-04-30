<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Modules\WorkoutsModel;

class W_hamstrings extends BaseController
{
    public function index()
    {   $name = 'Hamstrings';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_hamstrings', $data);
    }
}