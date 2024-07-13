<?php

namespace App\Controllers;
use App\Models\ModelUser;


class Login extends BaseController
{
    public function index()
    {
        // validasi 
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // valid ?
        if (!empty($this->request->getPost())) {

            $user = new ModelUser();

            $active_user = $user->where('username', $this->request->getPost('username'))->first();

            if (!empty($active_user)){
                if ($isDataValid){
                    $session = session();
                    $pass = $active_user['password'];
                    $verify_pass = password_verify($this->request->getPost('password'), $pass);
                    if($verify_pass){
                        $ses_data = [
                            'id' => $active_user['id_user'],
                            'username' => $active_user['username'],
                            'logged_in'  =>TRUE,
                        ];
                        $session->set($ses_data);
                    }
                    return redirect('dashboard');
                } else {
                    return redirect('dashboard');
                }
            }
        }
        echo view('login');
    }

    public function register()
    {
        // validasi 
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // valid ?
        if (!empty($this->request->getPost())) {
            if ($isDataValid){
                    $user = new ModelUser();
                    $user->insert([
                        'username' => $this->request->getPost('username'),
                        'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                    ]);

                    return redirect('login');              
            }
        }
        echo view('register');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect('dashboard');
    }
}