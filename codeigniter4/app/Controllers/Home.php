<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Modules\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $homeModel = new \App\Models\HomeModel();
        $data['users'] = $homeModel->getData();
        return view('home', $data);
    }
}