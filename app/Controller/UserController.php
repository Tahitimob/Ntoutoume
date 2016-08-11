<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
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

}