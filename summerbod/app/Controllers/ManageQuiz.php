<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ManageQuiz extends BaseController
{
    public function index()
    {
        $model = new \App\Models\DashboardModel();

        $data['questions'] = $model->getQuiz();
        return view('admin/manage_quiz', $data);
    }

    public function delete($id = null)
    {   
        $model = new \App\Models\DashboardModel();
    
        $data['quiz'] = $model->delQuestion($id);

        return redirect()->to( base_url('public/admin/manage_quiz') );
    }
}