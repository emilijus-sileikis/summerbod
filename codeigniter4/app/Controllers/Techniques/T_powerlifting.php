<?php

namespace App\Controllers\Techniques;
use App\Controllers\BaseController;
use App\Modules\CalisthenicsModel;

class T_powerlifting extends BaseController
{
	public function index()
	{
		$calistModel = new \App\Models\CalisthenicsModel();
        $data['workouts'] = $calistModel->getData();
		return view('t_powerlifting', $data);
	}
}