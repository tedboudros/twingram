<?php
if(isset($_SESSION['displayName'])){
    include_once DEFAULT_THEME_DIR . "admin/sidebar.php";
}


if(isset($_GET['adminpath'])){
    
    if(isset($_SESSION['displayName'])){
        ?> <div id="admincontainer"> <?php
        include_once DEFAULT_THEME_DIR . "admin/" . $_GET['adminpath'] . ".php";
        ?> </div> <?php
    }else{
        header("location: /admin");
    }

}else{

    if(isset($_SESSION['displayName'])){
          header("location: /admin?adminpath=dashboard");
    }else{
          include_once DEFAULT_THEME_DIR . "admin/login.php";
    }
          
}