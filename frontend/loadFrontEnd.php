<?php

	if(!isset($_SESSION['displayname'])){
		foreach($pages["login"] as $toInclude) {
			include_once DEFAULT_THEME_DIR . $toInclude;
		}
	}else{
		foreach($pages[$page] as $toInclude) {
			include_once DEFAULT_THEME_DIR . $toInclude;
		}
	}
?>