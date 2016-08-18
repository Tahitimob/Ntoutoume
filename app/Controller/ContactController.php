<?php

namespace Controller;

use \W\Controller\Controller;

class ContactController extends Controller
{

	public function sendMail()
	{
		
		if(isset($_POST['validate'])){
			$to = "projetWF@gmail.com";
			$subject = "Contact Pix'hell";
			$txt = $_POST['prenom']." ".$_POST['nom']."\r\n".$_POST['message'];
			$headers = "From: ".$_POST['email'] . "\r\n"
			."Reply-To: ".$_POST['email'];

			$mail = mail($to,$subject,$txt,$headers);
			if(!$mail){
				echo "Echec";
			} else {
				echo "Ok";
			}
		}
	}

}