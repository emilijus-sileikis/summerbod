<?php

namespace App\Controllers;

class Bmi_calc extends BaseController
{
    public function index()
    {
       return view('health/bmi_calc');
    }
}