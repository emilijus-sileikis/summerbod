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
		
		$fp = fopen('usersessionlogging.txt', 'a');
		fwrite($fp, 'Account deletion process successful:'. PHP_EOL .'id: '. $id . PHP_EOL . PHP_EOL);
		fclose($fp);

        $data['user'] = $model->delUser($id);
		
		
        return redirect()->to( base_url('public/admin/manage_users') );
    }
}