<?php

namespace App\Controllers\Workouts;
use App\Controllers\BaseController;

class W_triceps extends BaseController
{
    public function index()
    {
       return view('w_triceps');
    }
}