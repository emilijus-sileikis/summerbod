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
		
		$fp = fopen(ROOTPATH . 'writable/usersessionlogging.txt', 'a');
		date_default_timezone_set("Europe/Vilnius");
		fwrite($fp, 'User workout deletion process successful:'. PHP_EOL . 'timestamp: ' . date("m/d/Y h:i:s a", time()) . PHP_EOL .'workout id:' .$id. PHP_EOL . PHP_EOL);
		fclose($fp);
		
        return redirect()->to( base_url('public/admin/manage_user_workouts') );
    }
}