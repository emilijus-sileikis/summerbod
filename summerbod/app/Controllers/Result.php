<?php

namespace App\Controllers;
use App\Models\AnswrModel;

class Result extends BaseController
{
    public function index()
    {
        $answrModel = new \App\Models\AnswrModel();
        $data['res'] = $answrModel->getData();
       return view('result', $data);
    }
}
