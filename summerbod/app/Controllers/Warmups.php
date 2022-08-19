<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\WarmupModel;

class Warmups extends BaseController
{
    public function index()
	{
		$warmupModel = new \App\Models\WarmupModel();
		$model = new \App\Models\AllExModel();
        $data['warmups'] = $warmupModel->getData();
		$data['favorites'] = $model->getFav();

		return view('workouts/warmups', $data);
	}

	public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);

            return redirect()->to('public/Workouts/warmups');
        }
        else { 
            return redirect()->to('public/login');
        }
    }

    public function remove($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->removeFav($id);
            return redirect()->to($_SERVER['HTTP_REFERER']);
        }
        else { 
            return redirect()->to('public/login');
        }
    }
}