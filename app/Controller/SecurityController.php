<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
use \W\Security\AuthentificationModel as Auth;

class SecurityController extends Controller
{

	public function login()
	{
		if(isset($_POST['security_login'])){
			if (!empty($_POST['username']) && !empty($_POST['password'])) {
				$auth = new Auth();
				$userCheck = $auth->isValidLoginInfo($_POST['username'], $_POST['password']);
				if($userCheck){
					$user = new UserModel();
					$user = $user->find($userCheck);
					$auth->logUserIn($user);
					$this->redirectToRoute('default_home');
				}else{
					$this->show('security/login', ['error' => "La connexion a échouée, l'utilisateur n'existe pas ou le couple login/mot de passe est incorrect"]);
				}
			}else{
				$this->show('security/login', ['error' => "La connexion a échouée, au moins un champ est vide"]);
			}
		}
		$this->show('security/login');
	}

	public function logout(){
		if (isset($_POST['security_logout'])) {
			$auth = new Auth();
			$auth->logUserOut();
			$this->redirectToRoute('default_home');
		}
		$this->show('security/logout');
	}
}