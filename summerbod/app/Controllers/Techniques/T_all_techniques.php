<?php

namespace App\Controllers\Techniques;
use App\Controllers\BaseController;

class T_all_techniques extends BaseController
{
	public function index()
	{
		return view('workouts/t_all_techniques');
	}
}