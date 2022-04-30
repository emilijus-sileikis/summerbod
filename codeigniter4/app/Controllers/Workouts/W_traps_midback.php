<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Modules\WorkoutsModel;

class W_traps_midback extends BaseController
{
    public function index()
    {
        $name = 'Traps mid-back';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_traps_midback', $data);
    }
}