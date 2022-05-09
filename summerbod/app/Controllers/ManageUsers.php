<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ManageUsers extends BaseController
{
    public function index()
    {
        $model = new \App\Models\DashboardModel();

        $data['users'] = $model->getUsers();
        return view('admin/manage_users', $data);
    }

    public function delete($id = null)
    {   
        if ($id == 1) {
            $_SESSION['message'] = 'You can not delete the admin user!';
            session()->markAsFlashdata("message");
            return redirect()->to( base_url('public/admin/manage_users') );
        }

        $model = new \App\Models\DashboardModel();
    
        $data['user'] = $model->delUser($id);

        return redirect()->to( base_url('public/admin/manage_users') );
    }
}