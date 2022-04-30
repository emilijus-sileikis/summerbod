<?php

namespace App\Controllers;
use App\Modules\QuizModel;

class Quiz extends BaseController
{
    public function index()
    {
        $quizModel = new \App\Models\QuizModel();
        $data['results'] = $quizModel->getData();
        return view('quiz', $data);
    }
}
