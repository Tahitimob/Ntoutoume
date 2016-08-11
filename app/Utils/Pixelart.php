<?php

namespace Utils;
use \Model\PixelModel ;

class Pixelart {
	private $chain;

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

	public function add()
	{
		
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


}