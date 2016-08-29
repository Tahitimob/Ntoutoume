<?php

namespace Utils;
use \Model\PixelModel ;

class Pixelart {
	private $colorstring = ""; //La chaîne de caractère en hexa
	private $id;
	private $width = 30;
	//private $height = 4;
	private $data = array();
	private $dateCreated;

	function __construct($id = null) {
		$this->dateCreated = (new \DateTime())->format('Y-m-d');

		if($id){
			$pixelModel = new PixelModel();
			$pixelModel->setTable('pixelart');
			$pixel = $pixelModel->find($id);
			if(isset($pixel['id'])){
				$this->setString( $pixel['colorstring']);
				$this->setDateC($pixel['dateCreated']);
				$this->setWidth($pixel['width']);
			} else {
				$this->setBlank();
			}
		} else {
			$this->setBlank();
		}
	}

	public function setBlank(){
		$this->colorstring = "";
		for($i = 0; $i < $this->width; $i++){
			for($j = 0; $j < $this->width; $j++){
				$this->colorstring .= "#FFFFFF;";
			}
		}
	}

	public function verifLength($array){
		if(count($array) == $this->getWidth()* $this->getWidth()){
			//echo "Bon"; //Test unitaire
			return true;
		}
		return false; 
	}
	public function verifHexa($array)
	{
		foreach($array as $color){
			if(!preg_match("/^#[0-9A-Fa-f]{6};$/" , $color)){
				return false;
			}
		}
		return true;
	}

	public function arrayToString($array){
		$string = "";
		foreach($array as $color){
			$string .= $color;
		}
		$this->colorstring = $string;
	}


	public function create()
	{
		$width = 400 / $this->getWidth();
		/*if($this->getWidth() >= $this->getHeight()){
			$bloc = "<div style='width: ".($width*$this->getWidth())."px; height:400px;'>";
		} else {
			$bloc = "<div style='width: 400px; height:".($width*$this->getHeight())."px;'>";
		}*/
		$bloc = "<div id='wrapper' style='width: 400px; height:400px;'>";
		$array = explode(';', $this->getString());
		$z = 0;
		
		for($i = 0; $i < $this->getWidth(); $i++){
			for($j = 0; $j < $this->getWidth(); $j++){
				$rgb = $array[$z];
				$bloc .= "<div data-id='".($z+1)."' class='case' style='width:".$width."px; height:".$width."px; float: left; background-color:".$rgb."; border:1px ridge black; box-sizing: border-box '></div>";
				$z++;
			}
		}

		$bloc .= '</div>';
		echo $bloc;
	}

	public function getWidth()
	{
		return $this->width;
	}
	public function setWidth($width)
	{
		$this->width = $width;
	}

	/* Obsolète pour le moment
	public function getHeight()
	{
		return $this->height;
	}

	public function setHeight($height)
	{
		$this->height = $height;
	}
	*/
	public function getString(){
		return $this->colorstring;
	}

	public function setString($string)
	{
		$this->colorstring = $string;
	}

	public function getDateC()
	{
		return $this->dateCreated;
	}

	public function setDateC($date)
	{
		$this->dateCreated = $date;
	}

	public function setData($idUser)
	{
		$this->data['idUser'] = $idUser;
		$this->data['colorstring'] = $this->getString();
		$this->data['width'] = $this->getWidth();
		$this->data['height'] = $this->getWidth();
		$this->data['dateCreated'] = $this->getDateC();
	}
	public function getData()
	{
		return $this->data;
	}
}