<?php

	if(isset($_GET['path'])) {
		$page = $_GET['path'];
		if(!(isset($pages[$page]))){
			$page = "404";
		}
	}else{
		$page = "homepage";
	}