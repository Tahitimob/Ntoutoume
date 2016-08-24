<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
use \Model\PixelModel;
use \Utils\Pixelart;

class PixelController extends Controller
{
	public function create()
	{
		if(isset($_SESSION['user']['id'])){
			$user = new UserModel();
			$user = $user->find($_SESSION['user']['id']);
			$pixelart = new \Utils\Pixelart();
			if(isset($_POST['colors'])){
				if($pixelart->verifHexa($_POST['colors']) && $pixelart->verifLength($_POST['colors'])){
					//echo "Ok";  //Test unitaire
					
					$pixelart->arrayToString($_POST['colors']);
					$pixelart->setData($_SESSION['user']['id']); 
					$pixelModel = new PixelModel();
					$pixelModel->setTable('pixelart');
					//var_dump($pixelModel->insert($pixelart->getData())); 
					$pixel = $pixelModel->insert($pixelart->getData());
					//$insertId = $pixelModel->lastInsertId();
					//var_dump($insertId);
					if(isset($pixel['id'])){
						$url = $pixel['id'].".png";
						$pixel['url'] = $url;
						$pixelModel->update($pixel, $pixel['id']);
						$this->redirectToRoute('pixel_create_image', ['id' => $pixel['id']]);
					} 
				}
			}
			$this->show('pixel/create', ['pixel' => $pixelart]);
		} else {
			$this->redirectToRoute('user_inscription');
		}
	}

	public function createImage($id)
	{
		$pixelModel = new PixelModel();
		$pixelModel->setTable('pixelart');
		$pixel = $pixelModel->find($id);
		/*$array = explode(";", $pixel['colorstring']);
		for($i=0;$i<$pixel['width'];$i++){
			for($j=0; $j <$pixel['width']; $j++){
				$hexa = $array[$j+($i*$pixel['width'])];
				$red = hexdec(substr($hexa,1,2)); 
				$green = hexdec(substr($hexa,3,2)); 
				$blue = hexdec(substr($hexa,5,2));
				echo "<div style='display: inline-block; background-color: rgb(".$red.",".$green.",".$blue."); width: 20px; height: 20px;'></div>";
			}
			echo "<br>";
		}*/
		if($pixel['id']){
			$x = (400 / $pixel['width'])*$pixel['width'] ;
			//$y = ; Pour une futur utilisation avec des pixelart non carrés
			$taille_cube = $x / $pixel['width'];
			$image = imagecreatetruecolor($x,$x);
			$array = explode(";", $pixel['colorstring']);
			//$z = 0;
			for ($j=0; $j < $x/$taille_cube ; $j++) { // i = gestion des lignes // division par le nombre de ligne -1 car on démarre à 0
				for ($i=0; $i < $x/$taille_cube ; $i++) { // j = gestion des colonnes
			 	 	$hexa = $array[$i+($j*$pixel['width'])];
					$red = hexdec(substr($hexa,1,2)); 
					$green = hexdec(substr($hexa,3,2)); 
					$blue = hexdec(substr($hexa,5,2));

					$color = imagecolorallocate($image,$red,$green,$blue);

					imagefilledrectangle($image,0+($taille_cube*$i),0+($taille_cube*$j),$taille_cube+($taille_cube*$i),$taille_cube+($taille_cube*$j),$color);
					//$z++;
				
				} 
				
			}
			imagepng($image, "assets/img/pixelart/".$pixel['url']);
			imagedestroy($image);
			$this->redirectToRoute('pixel_edit', ['id' => $pixel['id']]);
		} else {
			$this->redirectToRoute('pixel_create');
		}
	}
	
	public function view($id)
	{
		$pixelModel = new PixelModel();
		$pixelModel->setTable('pixelart');
		$count = count($pixelModel->findAll());
		$pixel = $pixelModel->find($id);
		$prev = $pixelModel->prev($id);
		$next = $pixelModel->next($id);
		if(isset($pixel['id'])){
			$this->show('pixel/view', ['pixel' => $pixel, 'count' => $count, 'next' =>$next, 'prev' => $prev]);
		} else{
			$this->show('pixel/404');
		}
	}

	public function edit($id)
	{
		if(isset($_SESSION['user'])){
			$pixelModel = new PixelModel();
			$pixelModel->setTable('pixelart');
			$pixel = $pixelModel->find($id);
			if(isset($pixel['id']) && $pixel['idUser'] == $_SESSION['user']['id']){
				$pixelart = new Pixelart($id);
				if(isset($_POST['colors']) && $pixelart->verifHexa($_POST['colors']) && $pixelart->verifLength($_POST['colors'])){
					$pixelart->arrayToString($_POST['colors']);
					$pixelart->setData($_SESSION['user']['id']);
					$pixel = $pixelModel->update($pixelart->getData(), $id);
					$this->redirectToRoute('pixel_create_image', ['id' => $id]);
				}

				$this->show('pixel/edit', ['pixel' => $pixelart]);

			} else {
				$this->redirectToRoute('pixel_create');
			}
		} else {
			$this->redirectToRoute('user_inscription');
		}
	}

	public function delete($id)
	{
		if(isset($_SESSION['user'])){
			$pixelModel = new PixelModel();
			$pixelModel->setTable('pixelart');
			$pixel = $pixelModel->find($id);
			if(isset($pixel['id']) && $pixel['idUser'] == $_SESSION['user']['id']){
				
				if(isset($_POST['delete'])){
					$pixelModel->delete($id);
					$this->redirectToRoute('user_show', ['id' => $_SESSION['user']['id']]);
				} elseif(isset($_POST['cancel'])){
					$this->redirectToRoute('user_show', ['id' => $_SESSION['user']['id']]);
				}

				
				$this->show('pixel/delete', ["pixel" => $pixel]);
			} else {
				$this->show('w_errors/404');
			}
		} else {
			$this->redirectToRoute('user_inscription');
		}
	}

	public function list($page = 1)
	{
		$pixelModel = new PixelModel();
		$pixelModel->setTable('pixelart');
		$pixels = $pixelModel->findAll();
		$nbPages = (count($pixels)/10)+1;
		$pixels = $pixelModel->findAll("id", "ASC", 10, ($page-1)*10 );
		$this->show('pixel/list', ['pixels' =>$pixels, 'nbPages' => $nbPages, 'page' => $page]);
	}

}