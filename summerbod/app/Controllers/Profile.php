<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ProfileModel;
use App\Models\UserModel;
 
class Profile extends Controller
{
    public function index()
    {    
        return view('profile');
    }    
 
    public function add()
    { 
		$data = [];
        $model = new UserModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        $data['workouts'] = $model->getUserData();
		
		$rules = [
            'cat' => 'required',
            'exName' => 'required|max_length[25]',
            'descr' => 'required',
            'diff' => 'required',
			"image" => [
				'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,10240]',
			],
		];
		$errors = [
			'cat' => "The Category field is required.",
			'exName' => [
				'required' => "The Name field is required.",
				'max_length' => "Your Name is too long! Maximum length is 25 characters.",
			],
			'descr' => [
				'required' => "The Description field is required.",
				'max_length' => "Your Description is too long! Maximum length is 250 characters.",
			],
			'diff' => "The Dificulty field is required.",
			'image' => [
				'mime_in' => "Supported formats for uploading are: .jpg, .jpeg, .gif, .png.",
				'max_size' => "Your image is too big! Maximum size is 10MB.",
			],
		];
		
		if (!$this->validate($rules, $errors)) {
			return view('profile', $data, ['validation' => $this->validator]);
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