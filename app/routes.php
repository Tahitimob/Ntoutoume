<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/user', 'User#list', 'user_list'],
		['GET', '/user/[i:id]', "User#affiche", "user_show"],
		['GET|POST', '/inscription', 'User#inscription', 'user_inscription'],
		['GET|POST', '/login', 'Security#login', 'security_login'],
		['GET', '/create', 'Pixel#create', 'pixel_create'],
		
	);