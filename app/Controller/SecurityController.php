<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
use \W\Security\AuthentificationModel as Auth;

class SecurityController extends Controller
{

	public function login()
	{
		if(isset($_POST['connect'])){
			$auth = new Auth();
			$userCheck = $auth->isValidLoginInfo($_POST['username'], $_POST['password']);
			if($userCheck){
				$user = new UserModel();
				$user = $user->find($userCheck);
				$auth->logUserIn($user);
				$this->redirectToRoute('user_view', ['slug' => $user['username']]);
			}
		}
		$this->show('security/login');
	}

	public function logout(){
		$auth = new Auth();
		$auth->logUserOut();
		$this->redirectToRoute('default_home');
	}
}