<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ProfileModel;
 
class Profile extends Controller
{
    public function index()
    {    
        return view('profile');
    }    
 
    public function add()
    { 
		
		$rules = [
            'cat' => 'required',
            'exName' => 'required',
            'descr' => 'required',
            'diff' => 'required',
			"image" => [
				'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,10240]',
			],
		];
		
		if (!$this->validate($rules)) {
			return view('profile', ['validation' => $this->validator]);
		} else {
			$image = $this->request->getFile('image');
            $image->move(ROOTPATH . 'assets/images/workouts');
		  
			$data = [
			 'user_id' => session()->get('id'),
			 'user_image'  => base_url('assets/images/workouts').'/'.$image->getClientName(),
			 'user_category'  => $this->request->getVar('cat'),
			 'user_name'  => $this->request->getVar('exName'),
			 'user_difficulty'  => $this->request->getVar('diff'),
			 'user_descr'  => $this->request->getVar('descr'),			 
			];
			 
			$model = new ProfileModel(); 
			$save = $model->insert($data);
			return redirect()->to( base_url('public/profile') );
		}
		
    }
 
}

?>