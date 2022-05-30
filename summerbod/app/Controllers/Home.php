<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $homeModel = new \App\Models\HomeModel();
        $data['workouts'] = $homeModel->getData();
        return view('home', $data);
    }
}