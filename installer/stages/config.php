<?php
/////////////////////////// WRITING THE CONFIG FILE
$dir = rtrim(rtrim(__DIR__, "/config.php"),"installer\stages") . "/";
$fp=fopen($dir . 'config.php','w');
$fs =  "<?php\n";
$fs .= "define('ENGINE_DIR', '" . $dir . "engine/');\n";
$fs .= "define('HTTP', 'http://' . '" . $_SERVER['HTTP_HOST'] . "/');\n";
$fs .= "define('HTTP_FRONTEND', HTTP . 'frontend/');\n";
$fs .= "define('HTTP_FRONTEND_ADMIN', HTTP . 'admin/frontend/');\n";
$fs .= "define('ADMIN_DIR', '" . $dir . "admin/');\n";
$fs .= "define('ADMIN_FRONTEND_DIR', ADMIN_DIR . 'frontend/');\n";
$fs .= "define('FRONTEND_DIR', '" . $dir . "frontend/');\n";
$fs .= "define('IMAGE_DIR', HTTP . 'image/');\n";
$fs .= "define('DEFAULT_THEME_DIR', FRONTEND_DIR . 'required/default/');\n";
$fs .= "define('ADMIN_DEFAULT_THEME_DIR', ADMIN_FRONTEND_DIR . 'required/default/');\n";
fwrite($fp, $fs);
fclose($fp);
?>