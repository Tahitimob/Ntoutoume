<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'default_home'],
		['GET|POST', '/user', 'User#list', 'user_list'],
		['GET', '/user/[i:id]', "User#affiche", "user_show"],
		['GET|POST', '/inscription', 'User#inscription', 'user_inscription'],
		['GET|POST', '/login', 'Security#login', 'security_login'],
		['GET|POST', '/pixel', 'Pixel#create', 'pixel_create'],
		['GET|POST', '/pixel/[i:id]', 'Pixel#edit', 'pixel_edit'],
		
	);