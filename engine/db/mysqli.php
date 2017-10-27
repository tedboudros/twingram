<?php

function db_query($query){
	$connection = new mysqli(db_host, db_username, db_password, db_database, db_port);
	if(mysqli_errno($connection)){
		echo mysqli_error($connection);
	}
	$result = mysqli_query($connection, $query);
	return $result;
}

function prepareStringforPost($string){
	$connection = new mysqli(db_host, db_username, db_password, db_database, db_port);
	if(mysqli_errno($connection)){
		echo mysqli_error($connection);
	}
	$result = mysqli_real_escape_string($connection, $string);
	$array = explode(" ",$result);
	$newtext = "";
	$isBold = false;
	foreach($array as $text){
		if($text == "*"){
			if($isBold == true){
				$isBold = false;
				$newtext = $newtext . "</b>";
			}else{
				$isBold = true;
				$newtext = $newtext . "<b>";
			}
		}else{
			if (startsWith($text, '*')) {
				$text = ltrim($text, '*');
				$newtext = $newtext . "<b>";
			}
			if (filter_var($text, FILTER_VALIDATE_URL)) { //If link
				$newtext = $newtext . "<a href='" . htmlspecialchars($text) . "'>" . htmlspecialchars($text) . "</a>" . " ";
			}else{
				$newtext = $newtext . htmlspecialchars($text) . " ";
			}
			if (endsWith($text, '*')) {
				$newtext = rtrim($newtext, '* ');
				$newtext = $newtext . " ";
				$newtext = $newtext . "</b>";
			}
		}
	}
	if (strpos($newtext, '</b>') === false) {
		$newtext = str_replace("<b>", "", $newtext);
	}
	return $newtext;
}

function startsWith($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);

    return $length === 0 || 
    (substr($haystack, -$length) === $needle);
}