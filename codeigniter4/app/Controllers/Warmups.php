<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Modules\WarmupModel;

class Warmups extends BaseController
{
    public function index()
	{
		$warmupModel = new \App\Models\WarmupModel();
        $data['warmups'] = $warmupModel->getData();
		return view('warmups', $data);
	}
}