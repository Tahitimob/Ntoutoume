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
			if ($username = empty($_POST['username'])) {
				$username = $user['username'];
			}else{
				$username = $_POST['username'];
			}
			if ($email = empty($_POST['email'])) {
				$email = $user['email'];
			}else{
				$email = $_POST['email'];
			}
			$table_user = array('username' => $username, 'email' => $email);
			$user = new UserModel();
			$user->setTable('users');
			$NewUser = $user->update($table_user, $id);
			if (!empty($NewUser)) {
				$this->redirectToRoute('user_show', ['id' => $id]);
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
		if (isset($_POST['delete'])) {
			$user = new UserModel();
			$user->setTable('users');
			$NewUser = $user->delete($id);
			if (!empty($NewUser)) {
				$this->redirectToRoute('user_show', ['id' => $id]);
			}else{
				$this->show('user/delete/[i:id]', ['error' => "La suppression a échouée"]);//delete win mais fail redirect
			}
		}elseif (isset($_POST['cancel'])) {
			$this->redirectToRoute('user_list');
		}
		$this->show('user/delete', ['user' => $user]);
	}

	public function admin_add() {
		if (isset($_POST['add'])) {
			$password = $_POST['password'];			
			$cf_password = $_POST['cf-password'];

			if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($password) && !empty($cf_password)) {
				if ($password == $cf_password) {
					$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$table_user = array('username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $password, 'role' => 'admin');
					$user = new UserModel();
					$user->setTable('users');
					$testMail = $user->getUserByUsernameOrEmail($_POST['email']);
					$testUsername = $user->getUserByUsernameOrEmail($_POST['username']);
					if($testMail['id'] || $testUsername['id']){
						$this->show('user/admin_add', ['error' => "L'email ou le pseudo existe déjà"]);
					} else {
						$User1 = $user->insert($table_user);
						if (!empty($User1)) {
							$auth = new Auth();
							$auth->logUserIn($User1);
							$this->redirectToRoute('default_home');
						}else{
							$this->show('user/admin_add', ['error' => "L'ajout a échouée"]);
						}	
					}
				}else{
					$this->show('user/admin_add', ['error' => "L'ajout a échouée, le mot de passe et sa confirmation sont différents"]);
					// var_dump("L'ajout a échouée, le mot de passe et sa confirmation sont différents");
				}
			}else{
				$this->show('user/admin_add', ['error' => "L'ajout a échouée, au moins un champ est vide"]);
				// var_dump("L'ajout a échouée, le mot de passe et sa confirmation sont différents");
			}				

		}
		$this->show('user/admin_add');
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
			$password = $_POST['password'];			
			$cf_password = $_POST['cf-password'];

			if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($password) && !empty($cf_password)) {
				if ($password == $cf_password) {
					$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$table_user = array('username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $password, 'role' => 'user');
					$user = new UserModel();
					$user->setTable('users');
					$testMail = $user->getUserByUsernameOrEmail($_POST['email']);
					$testUsername = $user->getUserByUsernameOrEmail($_POST['username']);
					if($testMail['id'] || $testUsername['id']){
						$this->show('user/inscription', ['error' => "L'email ou le pseudo existe déjà"]);
					} else {
						$User1 = $user->insert($table_user);
						if (!empty($User1)) {
							$auth = new Auth();
							$auth->logUserIn($User1);
							$this->redirectToRoute('default_home');
						}else{
							$this->show('user/inscription', ['error' => "L'inscription a échouée"]);
						}	
					}
				}else{
					$this->show('user/inscription', ['error' => "L'inscription a échouée, le mot de passe et sa confirmation sont différents"]);
					// var_dump("L'inscription a échouée, le mot de passe et sa confirmation sont différents");
				}
			}else{
				$this->show('user/inscription', ['error' => "L'inscription a échouée, au moins un champ est vide"]);
				// var_dump("L'inscription a échouée, le mot de passe et sa confirmation sont différents");
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