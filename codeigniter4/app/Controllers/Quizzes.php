<?php

namespace App\Controllers;

class Quizzes extends BaseController
{
    public function index()
    {
       return view('quizzes');
    }
}
