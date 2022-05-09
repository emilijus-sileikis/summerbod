<?php

namespace App\Controllers\Techniques;
use App\Controllers\BaseController;

class T_all_techniques extends BaseController
{
	public function index()
	{
		return view('t_all_techniques');
	}
}