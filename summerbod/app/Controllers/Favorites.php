<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\HomeModel;

class Favorites extends BaseController
{
    public function index()
    {
        $model = new \App\Models\FavoritesModel();
        $data['workouts'] = $model->getData();
        return view('favorites', $data);
    }
}