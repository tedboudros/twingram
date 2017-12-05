<?php

if(isset($_SESSION['admin']['displayname'])){
    include_once ADMIN_DEFAULT_THEME_DIR . "header.php";
	include_once ADMIN_DEFAULT_THEME_DIR . "menu.php";
}

if(isset($_GET['adminpath'])){
    
    if(isset($_SESSION['admin']['displayname'])){
        include_once ADMIN_DEFAULT_THEME_DIR . "header.php";
        include_once ADMIN_DEFAULT_THEME_DIR  . $_GET['adminpath'] . ".php"; 
    }else{
        header("location: /admin/");
    }

}else{

    if(isset($_SESSION['admin']['displayname'])){
          header("location: /admin/index.php?adminpath=dashboard");
    }else{
          include_once ADMIN_DEFAULT_THEME_DIR . "login.php";
    }
          
}
