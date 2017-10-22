<?php

function db_query($query){
	$connection = new mysqli(db_host, db_username, db_password, db_database, db_port);
	if(mysqli_errno($connection)){
		echo mysqli_error($connection);
	}
	$result = mysqli_query($connection, $query);
	return $result;
}