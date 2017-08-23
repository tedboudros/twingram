<?php

	foreach($pages[$page] as $toInclude) {
		include_once DEFAULT_THEME_DIR . $toInclude;
	}

?>