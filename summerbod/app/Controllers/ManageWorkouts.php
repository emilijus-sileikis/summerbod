<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ManageWorkouts extends BaseController
{
    public function index()
    {
        $model = new \App\Models\DashboardModel();

        $data['workouts'] = $model->getWorkouts();
        return view('admin/manage_workouts', $data);
    }

    public function delete($id = null)
    {   
        $model = new \App\Models\DashboardModel();
    
        $data['workout'] = $model->delWorkout($id);

        return redirect()->to( base_url('public/admin/manage_workouts') );
    }
}