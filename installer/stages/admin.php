<?php

$hashedpassword;

$connection = new mysqli(db_host, db_username, db_password, db_database, db_port);

if(isset($_POST['admin_password']) && $_POST['admin_password'] == $_POST['admin_repassword']){
    $hashedpassword = password_hash($_POST['admin_password'], PASSWORD_BCRYPT);
    $query = "INSERT INTO `admin` (`id`, `displayname`, `username`, `passwordhash`, `date`, `image`) VALUES (NULL, '" . $_POST['admin_displayname'] . "', '" . $_POST['admin_username'] . "', '" . $hashedpassword . "', CURRENT_TIMESTAMP, 'profile.png')";
    mysqli_query($connection, $query) or print("<b>There was an error connecting to the database</b> " . mysqli_error($connection));
}else{
    echo "Passwords do not match.";
}

