<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;

class PixelController extends Controller
{
	public function create()
	{
		// if(isset($_SESSION['id'])){
		// 	$user = new UserModel();
		// 	$user = $user->find($_SESSION['id']);
		$pixelArt = new \Utils\Pixelart();
		if(isset($_POST['colors'])){

			
			if($pixelArt->verifHexa($_POST['colors'])){
				
			}

		}
			$this->show('pixel/create', ['pixel' => $pixelArt]);
		// } else {
		// 	$this->redirectToRoute('default_home');
		// }
	}
	
	public function edit($id)
	{
		
	}

}