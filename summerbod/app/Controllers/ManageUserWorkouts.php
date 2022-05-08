<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ManageUserWorkouts extends BaseController
{
    public function index()
    {
        $model = new \App\Models\DashboardModel();

        $data['usr_wrkt'] = $model->getUsr_Wrkt();
        return view('admin/manage_user_workouts', $data);
    }

    public function delete($id = null)
    {   

        $model = new \App\Models\DashboardModel();
    
        $data['workout'] = $model->delUserWorkout($id);

        return redirect()->to( base_url('public/admin/manage_user_workouts') );
    }
}