<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'default_home'], //page d'accueil
		
		['GET|POST', '/user', 'User#list', 'user_list'], //liste des utilisateurs en back office
		['GET|POST', '/user/[i:id]', "User#affiche", "user_show"], //données d'un utilisateur 
		['GET|POST', '/user/edit/[i:id]', "User#edit", "user_edit"], //edition de profil
		['GET|POST', '/user/delete/[i:id]', "User#admin_delete", "user_delete"], //suppression de compte par un admin

		['GET|POST', '/inscription', 'User#inscription', 'user_inscription'], //page d'inscription
		['GET|POST', '/login', 'Security#login', 'security_login'], //page de connexion
		['GET|POST', '/logout', 'Security#logout', 'security_logout'], //page de deconnexion

		['GET|POST', '/pixel/create', 'Pixel#create', 'pixel_create'], //page de création de pixel
		['GET|POST', '/pixel/create/[i:id]', 'Pixel#createImage', 'pixel_create_image'], //transformation en image
		['GET|POST', '/pixel/edit/[i:id]', 'Pixel#edit', 'pixel_edit'], //édition de pixel
		['GET', '/pixel', 'Pixel#list', 'pixel_list'], // Page d'affichage des pixel arts

		['POST', '/form', 'Contact#sendMail', 'contact_send_mail'] //Envoi du formulaire
		
	);