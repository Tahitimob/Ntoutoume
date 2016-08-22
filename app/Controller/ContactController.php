<?php

namespace Controller;

use \W\Controller\Controller;

class ContactController extends Controller
{

	public function sendMail()
	{
		
		if(isset($_POST['validate'])){
			/*$to = "projetWF@gmail.com";
			$subject = "Contact Pix'hell";
			$txt = $_POST['prenom']." ".$_POST['nom']."\r\n".$_POST['message'];
			$headers = "From: ".$_POST['email'] . "\r\n"
			."Reply-To: ".$_POST['email'];

			$mail = mail($to,$subject,$txt,$headers);
			if(!$mail){
				echo "Echec";
			} else {
				echo "Ok";
			}*/
			$mail = new \PHPMailer();
			$mail->IsSMTP();
			$mail->setFrom($_POST['email'], $_POST['nom']);
			$mail->addAddress("projetWF@gmail.com");
			$mail->Subject = "Contact Pix'hell";
			$mail->Body =  $_POST['prenom']." ".$_POST['nom']."\r\n".$_POST['message'];
			if(!$mail->send()) {
			    echo "Erreur: le message n'a pas été envoyé";
			} else {
			    echo 'Le message a été envoyé';
			}
		}
	}

}