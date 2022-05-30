<?php

namespace App\Controllers;
use App\Models\AnswrModel;

class Result extends BaseController
{
    public function index()
    {
        $answrModel = new \App\Models\AnswrModel();

        if (isset($_POST["btnSubmit"])) {
            $data['res'] = $answrModel->getData();
        }

       return view('workouts/result', $data);
    }
}
