<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
use \W\Security\AuthentificationModel as Auth;

class UserController extends Controller
{
	public function list()
	{
		$user = new UserModel();
		$users = $user->findAll();
		$this->show('user/list', ['users' => $users]);
	}
	public function affiche($id)
	{
		$user = new UserModel();
		$user = $user->find($id);
		$this->show('user/show', ['user' => $user]);
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
				$this->show('user/inscription', ['error' => "L'inscription a échoué"]);
			}
			

		}
		$this->show('user/inscription');
	}

	public function profil(){
		if(isset($_SESSION['id'])){
			$user = new UserModel();
			$user = $user->find($_SESSION['id']);
			$this->show('user/profil', ['user' => $user]);
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