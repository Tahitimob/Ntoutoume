<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\UserModel;
use \Model\PixelModel;

class PixelController extends Controller
{
	public function create()
	{
		// if(isset($_SESSION['id'])){
		// 	$user = new UserModel();
		// 	$user = $user->find($_SESSION['id']);
		$pixelArt = new \Utils\Pixelart();
		if(isset($_POST['colors'])){

			
			if($pixelArt->verifHexa($_POST['colors']) && $pixelArt->verifLength($_POST['colors'])){
				//echo "Ok";  //Test unitaire
				$pixelArt->arrayToString($_POST['colors']);
				$pixelArt->setData(1); 
				$pixelModel = new PixelModel();
				$pixelModel->setTable('pixelart');
				//var_dump($pixelModel->insert($pixelArt->getData())); 
				$pixel = $pixelModel->insert($pixelArt->getData());
				var_dump($pixel);
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
		$this->show('pixel/create', ['pixel' => $pixelArt]);
		// } else {
		// 	$this->redirectToRoute('default_home');
		// }
	}

	public function createImage($id)
	{
		$pixelModel = new PixelModel();
		$pixelModel->setTable('pixelart');
		$pixel = $pixelModel->find($id);
		if($pixel['id']){
			$x = (500 / $pixel['width'])*$pixel['width'] ;
			//$y = (500 / $pixel['height'])*$pixel['height']; Pour une futur utilisation avec des pixelart non carrés

			$image = imagecreate($x,$x);
			for ($j=0; $j < $x/$taille_cube ; $j++) { // i = gestion des lignes // division par le nombre de ligne -1 car on démarre à 0
				for ($i=0; $i < $x/$taille_cube ; $i++) { // j = gestion des colonnes
				 	if ($z > (count($array)-1)) {
				 		
				 	}else {
					 	$hexa = $array[$z];
						$red = hexdec(substr($hexa,1,2)); 
						$green = hexdec(substr($hexa,3,2)); 
						$blue = hexdec(substr($hexa,5,2));

						$color = imagecolorallocate($image,$red,$green,$blue);

						imagefilledrectangle($image,0+($taille_cube*$i),0+($taille_cube*$j),$taille_cube+($taille_cube*$i),$taille_cube+($taille_cube*$j),$color);
						$z++;
					}
				} 
				
			}
			imagepng($image, "test.png");
			imagedestroy($image);
			$this->redirectToRoute('pixel_create');
		} else {
			$this->redirectToRoute('pixel_create');
		}
	}
	
	public function edit($id)
	{
		
	}

}