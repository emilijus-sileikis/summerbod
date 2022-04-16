<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;

class W_biceps extends BaseController
{
    public function index()
    {
       return view('w_biceps');
    }
}