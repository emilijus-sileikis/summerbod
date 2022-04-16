<?php

namespace App\Controllers\Techniques;
use App\Controllers\BaseController;

class T_calisthenics extends BaseController
{
	public function index()
	{
		return view('t_calisthenics');
	}
}