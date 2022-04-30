<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;
use App\Modules\WorkoutsModel;

class W_chest extends BaseController
{
    public function index()
    {
        $name = 'Chest';
        $workoutModel = new \App\Models\WorkoutsModel();
        $data['workouts'] = $workoutModel->getData($name);
        return view('w_chest', $data);
    }
}