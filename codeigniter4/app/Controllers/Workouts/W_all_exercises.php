<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;

class W_all_exercises extends BaseController
{
    public function index()
    {
       return view('w_all_exercises');
    }
}