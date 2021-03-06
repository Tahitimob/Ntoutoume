<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'default_home'], //page d'accueil
		
		['GET|POST', '/user/[i:id]', "User#affiche", "user_show"], //données d'un utilisateur 
		['GET|POST', '/user/edit/[i:id]', "User#edit", "user_edit"], //edition de profil

		['GET|POST', '/user', 'User#liste', 'user_list'], //liste des utilisateurs en back office
		['GET|POST', '/user/admin_add', 'User#admin_add', 'user_admin_add'], //liste des utilisateurs en back office
		['GET|POST', '/user/delete/[i:id]', "User#admin_delete", "user_delete"], //suppression de compte par un admin

		['GET|POST', '/inscription', 'User#inscription', 'user_inscription'], //page d'inscription
		['GET|POST', '/login', 'Security#login', 'security_login'], //page de connexion
		['GET|POST', '/logout', 'Security#logout', 'security_logout'], //page de deconnexion

		['GET|POST', '/pixel/create', 'Pixel#create', 'pixel_create'], //page de création de pixel
		['GET|POST', '/pixel/create/[i:id]', 'Pixel#createImage', 'pixel_create_image'], //transformation en image
		['GET|POST', '/pixel/edit/[i:id]', 'Pixel#edit', 'pixel_edit'], //édition de pixel
		['GET|POST', '/pixel/delete/[i:id]', 'Pixel#delete', 'pixel_delete'], //suppression de pixel
		['GET', '/pixel/[i:page]?', 'Pixel#liste', 'pixel_list'], // Page d'affichage des pixel arts
		['GET', '/pixel/view/[i:id]', 'Pixel#view', 'pixel_view'], //Affichage d'un pixel art

		['POST', '/form', 'Contact#sendMail', 'contact_send_mail'] //Envoi du formulaire
		
	);