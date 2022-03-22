<?php

namespace App\Controllers;

class Health extends BaseController
{
    public function index()
    {
       return view('health');
    }
}