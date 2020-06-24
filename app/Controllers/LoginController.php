<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class LoginController extends BaseController
{

	protected $userModel;
	protected $session;

    function __construct()
    {
    	$this->userModel = new User($db);
    	$this->session = \Config\Services::session();
    }

    public function showLoginForm()
    {
        if ($this->session->has('auth')) {
            return redirect()->to('/users');
        }
        return $this->blade->render('auth/login');
    }

    public function login()
    {
       $rules = [
            'email' =>'required|valid_email',
            'password'     => 'required',
        ];

        if (! $this->validate($rules) ){
            return $this->blade->render('auth/login',['errors' => $this->validator->getErrors()]);
        }

        $user = $this->userModel->asObject()->where('email',$this->request->getPostGet('email'))->first();

        if (empty($user)) {
            return $this->blade->render('auth/login',['errors' => ['Estas credenciales no coinciden con nuestros registros.']]);
        }

        if( password_verify($this->request->getPostGet('password'), $user->password) ) {

            $this->session->set('auth',$user);

            return redirect()->to('/users');
        }

        return $this->blade->render('auth/login',['errors' => ['Estjkhkbjbjkas credenciales no coinciden con nuestros registros.']]);
    }

    public function logout()
    {
        $this->session->destroy();
       return redirect()->to('/login');
    }
}
