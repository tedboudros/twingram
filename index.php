<?php
session_start();
/*
$dirinst = __DIR__ . "/installer/";
if(file_exists($dirinst) && is_dir($dirinst)){
	header("location: /installer/");
} */

	include_once 'config.php';
	include_once ENGINE_DIR . 'start.php';
