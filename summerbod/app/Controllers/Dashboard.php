<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new \App\Models\DashboardModel();

        $data['users'] = $model->getUsers();
        $data['quiz'] = $model->getQuiz();
        $data['workouts'] = $model->getWorkouts();
        $data['usr_wrkt'] = $model->getUsr_Wrkt();
        return view('admin/dashboard', $data);
    }
}