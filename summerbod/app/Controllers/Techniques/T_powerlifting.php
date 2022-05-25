<?php

namespace App\Controllers\Techniques;
use App\Controllers\BaseController;
use App\Models\CalisthenicsModel;

class T_powerlifting extends BaseController
{
	public function index()
	{
        $title = 'Powerlifting Exercises';
		$calistModel = new \App\Models\CalisthenicsModel();
		$model = new \App\Models\AllExModel();
        $data['workouts'] = $calistModel->getData();
		$data['favorites'] = $model->getFav();
        $data['title'] = $title;

		return view('workouts/techniques', $data);
	}

	public function add($id)
    {   
        if (session()->get('isLoggedIn')) {
            $model = new \App\Models\AllExModel();
            $model->insertFav($id);

            return redirect()->to('public/Workouts/t_powerlifting');
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