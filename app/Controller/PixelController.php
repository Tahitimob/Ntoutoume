<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
class PixelController extends Controller
{
	public function create()
	{
		if(isset($_SESSION['id'])){
			$user = new UserModel();
			$user = $user->find($_SESSION['id']);
			$this->show('pixel/create', ['user' => $user]);
		} else {
			$this->redirectToRoute('default_home');
		}
	}
	
}