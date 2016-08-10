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

}