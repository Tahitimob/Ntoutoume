<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
use \W\Security\AuthentificationModel as Auth;
use \Model\PixelModel;

class UserController extends Controller
{
	public function list()
	{
		// $loggedUser = $this->getUser();
		// var_dump($loggedUser);
		$this->allowTo('admin');
		$user = new UserModel();
		$users = $user->findAll();

		$this->show('user/list', ['users' => $users]);
	}

	public function edit($id)
	{
		// $loggedUser = $this->getUser();
		// var_dump($loggedUser);
		$user = new UserModel();
		$user = $user->find($id);
		if (isset($_POST['sauvegarder'])) {
			if ($username = $_POST['username'] == "") {
				$username = $user['username'];
			}else{
				$username = $_POST['username'];
			}
			if ($email = $_POST['email'] == "") {
				$email = $user['email'];
			}else{
				$email = $_POST['email'];
			}
			if ($role = $_POST['role'] == "") {
				$role = $user['role'];
			}else{
				$role = $_POST['role'];
			}
			$table_user = array('username' => $username, 'email' => $email, 'role' => $role);
			$user = new UserModel();
			$user->setTable('users');
			$NewUser = $user->update($table_user);
			if (!empty($NewUser)) {
				$this->redirectToRoute('user_show');
			}else{
				$this->show('user/edit', ['error' => "L'édition a échouée"]);
			}
		}
		$this->show('user/edit', ['user' => $user]);
	}

	public function admin_delete($id)
	{
		// $loggedUser = $this->getUser();
		// var_dump($loggedUser);
		$this->allowTo('admin');
		$user = new UserModel();
		$user = $user->find($id);
		$this->show('user/delete', ['user' => $user]);
	}

	public function affiche($id)
	{
		$user = new UserModel();
		$user = $user->find($id);
		if (isset($_POST['edit'])) {
			$this->redirectToRoute('user_edit');
		}
		if(isset($user['id'])){
			$pixelModel = new PixelModel();
			$pixelModel->setTable('pixelart');
			$pixels = $pixelModel->findAll();
			$this->show('user/show', ['user' => $user, 'pixels' => $pixels]);
		} else {
			$this->redirectToRoute('default_home');
		}
		
	}


	public function inscription(){
		if (isset($_POST['register'])) {
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$table_user = array('username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $password, 'role' => 'user');
			$user = new UserModel();
			$user->setTable('users');
			$User1 = $user->insert($table_user);
			if (!empty($User1)) {
				$auth = new Auth();
				$auth->logUserIn($User1);
				$this->redirectToRoute('default_home');
			}else{
				$this->show('user/inscription', ['error' => "L'inscription a échouée"]);
			}
			

		}
		$this->show('user/inscription');
	}

	public function profil(){
		if(isset($_SESSION['id'])){
			$user = new UserModel();
			$user = $user->find($_SESSION['id']);
			$this->show('user/show', ['user' => $user]);
		} else {
			$this->redirectToRoute('default_home');
		}
	}

	public function create()
	{
		// if(isset($_SESSION['id'])){
		// 	$user = new UserModel();
		// 	$user = $user->find($_SESSION['id']);
		$this->show('user/create');
		// } else {
		// 	$this->redirectToRoute('default_home');
		// }
	}
}