<?php

namespace Utils;
use \Model\PixelModel ;

class Pixelart {
	private $colorstring; //La chaîne de caractère en hexa
	private $id;
	private $width = 4;
	private $height = 4;
	private $data = array();
	private $dateCreated;

	function __construct($id = null) {
		$this->dateCreated = (new \DateTime())->format('Y-m-d');
	}

	public function verifLength($array){
		if(count($array) == $this->getWidth()* $this->getHeight()){
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
		$this->chain = $string;
	}


	public function create()
	{
		$bloc = "<div style='width: 400px; height:400px'>";
		for($i = 0; $i < 4; $i++){
			for($j = 0; $j < 4; $j++){
				$red = rand ( 0 , 255 );
				$green = rand ( 0 , 255 );
				$blue = rand ( 0 , 255 );
				$rgb = "rgb(".$red.",".$green.",".$blue.")";
				$bloc .= "<div class='case' style='width:100px; height:100px; float: left; background-color:".$rgb." '></div>";
			}
		}

		$bloc .= '</div>';
		echo $bloc;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function getChain(){
		return $this->chain;
	}
	public function getDateC()
	{
		return $this->dateCreated;
	}

	public function setData($idUser)
	{
		$this->data['idUser'] = $idUser;
		$this->data['colorstring'] = $this->getChain();
		$this->data['width'] = $this->getWidth();
		$this->data['height'] = $this->getHeight();
		$this->data['dateCreated'] = $this->getDateC();
	}
	public function getData()
	{
		return $this->data;
	}
}