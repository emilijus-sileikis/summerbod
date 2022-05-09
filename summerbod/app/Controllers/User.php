<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') 
        {

            $rules = [
                'email' => 'required|min_length[6]|max_length[100]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password is incorrect!",
                ],
            ];

            if (!$this->validate($rules, $errors)) 
            {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } 
            else 
            {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))->first();

                if ($user['email'] == 'summerbod@admin.com') 
                {
                    $this->setUserSession($user);
                    return redirect()->to(base_url('public/admin/dashboard'));
                }
                else 
                {
                    $this->setUserSession($user);
                    return redirect()->to(base_url('public/profile'));
                }

            }
        }
        return view('login');
    }

    private function setUserSession($user)
    {
        if ($user['email'] == 'summerbod@admin.com')
        {
            $data = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'isLoggedIn' => true,
                'isAdmin' => true,
            ];
        }
        else
        {
            $data = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'isLoggedIn' => true,
            ];
    
        }
        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') 
        {
            $rules = [
                'name' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            $errors = [
                'name' => [
                    'min_length' => "The name must be at least 3 characters long!",
                    'max_length' => "Your name is too long! Maximum length is 20 characters.",
                ],
                'email' => [
                    'min_length' => "Your email must be at least 6 characters long!",
                    'max_length' => "Your email is too long! Maximum length is 100 characters.",
                    'is_unique' => "A user with this email is already registered!",
                ],
                'password' => [
                    'min_length' => "Your password must be at least 8 characters long!",
                    'max_length' => "Your password is too long! Maximum length is 255 characters.",
                ],
                'password_confirm' => [
                    'matches' => "'Password' and 'Confirm Password' fields must match!",
                ],
            ];

            if (!$this->validate($rules, $errors)) 
            {
                return view('register', [
                    "validation" => $this->validator,
                ]);
            } 
            else 
            {
                $model = new UserModel();

                $newData = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to(base_url('public/login'));
            }
        }
        return view('register');
    }

    public function profile()
    {

        $data = [];
        $model = new UserModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('profile', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('public/home');
    }
}