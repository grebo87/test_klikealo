<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class UserController extends BaseController
{

	protected $userModel;
	protected $session;

    function __construct()
    {
    	$this->userModel = new User($db);
    	helper('form');
    }

    public function index()
    {
    	$users = $this->userModel->findAll();
        return $this->blade->render('users/index', ['users' => $users]);
    }

    public function view($page = 'home')
    {
    }

    public function create()
    {
    	return $this->blade->render('users/create');
    }

    public function store()
    {
    	$rules = [
	        'name' => 'required|alpha_space',
	        'surnames' => 'required|alpha_space',
	        'email' =>'required|valid_email|is_unique[users.email]',
	        'password'     => 'required|min_length[8]',
	        'password_confirmation' => 'required_with[password]|matches[password]',
    	];

    	if (! $this->validate($rules) ){
    		return $this->blade->render('users/create',['errors' => $this->validator->getErrors()]);
    	}

    	$data = [
    		'name' => $this->request->getPostGet('name'),
    		'surnames' => $this->request->getPostGet('surnames'),
    		'email' => $this->request->getPostGet('email'),
    		'phone' => $this->request->getPostGet('phone'),
    		'status' => $this->request->getPostGet('status'),
    		'password' => password_hash($this->request->getPostGet('password'), PASSWORD_DEFAULT),
    	];

    	$this->userModel->save($data);

    	$this->session->setFlashdata('message', 'Usuario Guardado');
    	$this->session->setFlashdata('alert', 'success');

    	return redirect()->to('/users');
    }

    public function show()
    {
    	if($this->request->getPostGet('id')){
			$id = $this->request->getPostGet('id');
		}else{
			$id = $this->request->uri->getSegment(3);
		}

		$user = $this->userModel->find($id);

		if (empty($user)) {
			$this->session->setFlashdata('message', 'Usuario no encontrado');
			$this->session->setFlashdata('alert', 'danger');

    		return redirect()->to('/users');
		}

		return $this->blade->render('users/show',['user' => $user]);
    }

    public function edit()
    {
    	if($this->request->getPostGet('id')){
			$id = $this->request->getPostGet('id');
		}else{
			$id = $this->request->uri->getSegment(3);
		}

		$user = $this->userModel->find($id);

		if (empty($user)) {
			$this->session->setFlashdata('message', 'Usuario no encontrado');
			$this->session->setFlashdata('alert', 'danger');

    		return redirect()->to('/users');
		}

		return $this->blade->render('users/edit',['user' => $user]);
    }

    public function update($value='')
    {
    	if($this->request->getPostGet('id')){
			$id = $this->request->getPostGet('id');
		}else{
			$id = $this->request->uri->getSegment(3);
		}

		$user = $this->userModel->find($id);

		if (empty($user)) {
			$this->session->setFlashdata('message', 'Usuario no encontrado');
			$this->session->setFlashdata('alert', 'danger');

    		return redirect()->to('/users');

		}
    	$this->userModel->update($id, $this->request->getRawInput());

    	$this->session->setFlashdata('message', 'Usuario Modificado');
    	$this->session->setFlashdata('alert', 'success');

    	return redirect()->to('/users');
    }

    public function destroy()
    {
    	if($this->request->getPostGet('id')){
			$id = $this->request->getPostGet('id');
		}else{
			$id = $this->request->uri->getSegment(3);
		}

		$user = $this->userModel->find($id);

		if (empty($user)) {
			$this->session->setFlashdata('message', 'Usuario no encontrado');
			$this->session->setFlashdata('alert', 'danger');

    		return redirect()->to('/users');

		}

		$this->userModel->delete($id);

    	$this->session->setFlashdata('message', 'Usuario Eliminado');
    	$this->session->setFlashdata('alert', 'success');

    	return redirect()->to('/users');

    }
}
