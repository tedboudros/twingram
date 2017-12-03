<?php
	
	include_once ENGINE_DIR . 'pages.php';

	$url = $_SERVER['REQUEST_URI'];
	if (strpos($url,'admin') !== false) {
		include_once ADMIN_FRONTEND_DIR . 'loadFrontEnd.php';
	}else{
		include_once FRONTEND_DIR . 'loadFrontEnd.php';
	}
	