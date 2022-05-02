<?php

namespace App\Controllers\Techniques;
use App\Controllers\BaseController;
use App\Models\CalisthenicsModel;

class T_calisthenics extends BaseController
{
	public function index()
	{
		$calistModel = new \App\Models\CalisthenicsModel();
        $data['workouts'] = $calistModel->getData();
		return view('t_calisthenics', $data);
	}
}